<?php

namespace App\Controllers;

class Diagnosa extends BaseController
{
    protected $kerusakan;
    protected $pengetahuan;
    protected $keluhan;
    public function __construct()
    {
        $this->kerusakan = new \App\Models\KerusakanModel();
        $this->pengetahuan = new \App\Models\PengetahuanModel();
        $this->keluhan = new \App\Models\KeluhanModel();
    }
    public function index(): string
    {
        if (session()->get('isRole')) {
            return view('deteksi');
        }
        return view('diagnosa');
    }

    public function read(): object
    {
        return $this->respond($this->keluhan->select('keluhan.*, kerusakan.kerusakan, kerusakan.kode_kerusakan')->join('kerusakan', 'kerusakan.id = keluhan.kerusakan_id')->orderBy('id', 'asc')->findAll());
    }

    public function post(): object
    {
        $data = $this->request->getJSON();

        $dataKerusakan = $this->kerusakan->findAll();
        $dataPengetahuan = $this->pengetahuan->findAll();
        foreach ($dataKerusakan as $itemKerusakan) {
            $itemKerusakan->nilai = null;
            foreach ($dataPengetahuan as $itemPengetahuan) {
                if ($itemKerusakan->id == $itemPengetahuan->kerusakan_id) {
                    $set = $this->checkData($data, $itemPengetahuan);
                    if ($set === null) {
                        if ($itemKerusakan->nilai === null) $itemKerusakan->nilai = 0;
                        else $itemKerusakan->nilai *= 0;
                    } else {
                        if ($itemKerusakan->nilai === null) {
                            $itemKerusakan->nilai = $itemPengetahuan->bobot;
                        } else {
                            $itemKerusakan->nilai *= $itemPengetahuan->bobot;
                        }
                    }
                    // foreach ($data as $itemData) {
                    //     if ($itemPengetahuan->gejala_id == $itemData->id) {
                    //         if($itemKerusakan->nilai == null) $itemKerusakan->nilai = $itemPengetahuan->bobot;
                    //         else $itemKerusakan->nilai *= $itemPengetahuan->bobot;
                    //     }else{
                    //         if($itemKerusakan->nilai == null) $itemKerusakan->nilai = 0;
                    //         else $itemKerusakan->nilai *= 0;
                    //     }
                    // }
                }
            }
        }
        return $this->respond($dataKerusakan);
    }

    function checkData($data, $item)
    {
        foreach ($data as $key => $value) {
            if ($value->id == $item->gejala_id) {
                return $item;
            }
        }
        return null;
    }

    function save(): object
    {
        try {
            $data = $this->request->getJSON();
            $item = [
                'kerusakan_id' => $data->id
            ];
            $this->keluhan->insert($item);
            $id = $this->keluhan->getInsertID();
            $set = $this->keluhan->select('keluhan.*, kerusakan.kerusakan, kerusakan.kode_kerusakan')->join('kerusakan', 'kerusakan.id = keluhan.kerusakan_id')->where('keluhan.id', $id)->first();
            return $this->respond($set);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
}
