<?php

namespace App\Controllers;

class Diagnosa extends BaseController
{
    public function index(): string
    {
        if(session()->get('isRole')){
            return view('deteksi');
        }
        return view('diagnosa');
    }

    public function post(): object
    {
        $data = $this->request->getJSON();
        $kerusakan = new \App\Models\KerusakanModel();
        $pengetahuan = new \App\Models\PengetahuanModel();
        $dataKerusakan = $kerusakan->findAll();
        $dataPengetahuan = $pengetahuan->findAll();
        foreach ($dataKerusakan as $itemKerusakan) {
            $itemKerusakan->nilai = null;
            foreach ($dataPengetahuan as $itemPengetahuan) {
                if ($itemKerusakan->id == $itemPengetahuan->kerusakan_id) {
                    $set = $this->checkData($data, $itemPengetahuan);
                    if ($set===null) {
                        if ($itemKerusakan->nilai === null) $itemKerusakan->nilai = 0;
                        else $itemKerusakan->nilai *= 0;
                    } else {
                        if ($itemKerusakan->nilai === null){
                            $itemKerusakan->nilai = $itemPengetahuan->bobot;
                        }
                        else{
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
}
