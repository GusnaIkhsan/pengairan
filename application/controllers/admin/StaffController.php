<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class StaffController extends CI_Controller {

    function generate_template(){
        $spreadsheet = new Spreadsheet();
        $styleHeader = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER
            ],
            'borders' => [
                'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];

        $styleBody = [
            'font' => [
                'bold' => false,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT
            ],
            'borders' => [
                'left' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'right' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],            
        ];

        $styleFooter = [
            'font' => [
                'bold' => false,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT
            ],
            'borders' => [
                'left' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'right' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'bottom' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);

        $spreadsheet->getActiveSheet()->getStyle('A2:B2')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A8:D8')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A20:C20')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A32:C32')->applyFromArray($styleHeader);

        // Header
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A2', 'Keterangan')
        ->setCellValue('B2', 'Isi');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A8', 'No')
        ->setCellValue('B8', 'Nama Pelatihan')
        ->setCellValue('C8', 'Penyelenggara')
        ->setCellValue('D8', 'Waktu');
        
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A20', 'No')
        ->setCellValue('B20', 'Penghargaan & Paten')
        ->setCellValue('C20', 'Tahun');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A32', 'No')
        ->setCellValue('B32', 'Aktivitas Penunjang (buku/publikasi)')
        ->setCellValue('C32', 'Tahun');

        // Kolom
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A3', 'Nama')
        ->setCellValue('A4', 'NIK')
        ->setCellValue('A5', 'Bidang Pelayanan')
        ->setCellValue('A6', 'Tupoksi');    

        for ($i = 3; $i < 7; $i++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $i)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $i)->applyFromArray($styleBody);
            if ($i==6){
                $spreadsheet->getActiveSheet()->getStyle('A' . $i)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('B' . $i)->applyFromArray($styleFooter);                
            }
        }
        
        $count = 1;
        for ($j = 9; $j < 19; $j++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $j)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $j)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('C' . $j)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('D' . $j)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getCell('A' . $j)
            ->setValueExplicit(
                $count,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            if ($j==18){
                $spreadsheet->getActiveSheet()->getStyle('A' . $j)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('B' . $j)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('C' . $j)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('D' . $j)->applyFromArray($styleFooter);
            }
            $count++;
        }

        $countPenghargaan = 1;
        for ($k = 21; $k < 31; $k++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $k)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $k)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('C' . $k)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getCell('A' . $k)
            ->setValueExplicit(
                $countPenghargaan,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            if ($k==30){
                $spreadsheet->getActiveSheet()->getStyle('A' . $k)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('B' . $k)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('C' . $k)->applyFromArray($styleFooter);
            }
            $countPenghargaan++;
        }

        $countAktivitas = 1;
        for ($l = 33; $l < 43; $l++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $l)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $l)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('C' . $l)->applyFromArray($styleBody);           
            $spreadsheet->getActiveSheet()->getCell('A' . $l)
            ->setValueExplicit(
                $countAktivitas,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            if ($l==42){
                $spreadsheet->getActiveSheet()->getStyle('A' . $l)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('B' . $l)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('C' . $l)->applyFromArray($styleFooter);                
            }
            $countAktivitas++;
        }

        // $spreadsheet->getActiveSheet()->getProtection()->setSheet(true);
        // $spreadsheet->getActiveSheet()->getStyle('A1:Z1002')->getProtection()->setLocked(false);

        // $spreadsheet->getActiveSheet()->getStyle('A1:Z1')->getProtection()->setLocked(\PhpOffice\PhpSpreadsheet\Style\Protection::PROTECTION_PROTECTED);
        // $spreadsheet->getActiveSheet()->getStyle('A2:Z2')->getProtection()->setLocked(\PhpOffice\PhpSpreadsheet\Style\Protection::PROTECTION_PROTECTED);
        // $spreadsheet->getActiveSheet()->getStyle('A3:A23')->getProtection()->setLocked(\PhpOffice\PhpSpreadsheet\Style\Protection::PROTECTION_PROTECTED);
        // $spreadsheet->getActiveSheet()->getStyle('A12:Z12')->getProtection()->setLocked(\PhpOffice\PhpSpreadsheet\Style\Protection::PROTECTION_PROTECTED);
        // $spreadsheet->getActiveSheet()->getStyle('A13:Z13')->getProtection()->setLocked(\PhpOffice\PhpSpreadsheet\Style\Protection::PROTECTION_PROTECTED);
        // $spreadsheet->getActiveSheet()->getStyle('C2:Z1002')->getProtection()->setLocked(\PhpOffice\PhpSpreadsheet\Style\Protection::PROTECTION_PROTECTED);
        // $spreadsheet->getActiveSheet()->getStyle('A23:Z2000')->getProtection()->setLocked(\PhpOffice\PhpSpreadsheet\Style\Protection::PROTECTION_PROTECTED);

        $writer = new Xlsx($spreadsheet);

        $fileName = "Tambah-Data-Staff-" . date("dmYhis") . ".xlsx";

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
    }

    function nullCheck($param){
        if(!is_null($param)){
            return $param; 
        }else{
           return "-";
        }
    }

    function recieve_from_upload_template(){
        $fileExcel = null;
        if (isset($_FILES['fileExcel']['tmp_name'])) {
            $fileExcel = $_FILES['fileExcel']['tmp_name'];
        }

        if ($fileExcel) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $spreadsheet = $reader->load($_FILES['fileExcel']['tmp_name']);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();

            // biodata
            $nama_staff = $this->nullCheck($sheetData[2][1]);
            $nik = $this->nullCheck($sheetData[3][1]);
            $bidang_pelayanan = $this->nullCheck($sheetData[4][1]);
            $tupoksi = $this->nullCheck($sheetData[5][1]); 
            
            // workshop
            $header_pelatihan = "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\" style=\"text-align: left;\">No</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Nama Pelatihan</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Penyelenggara</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Waktu</th>
                                        </tr>";
            $footer = "</thead>
                        </table>";
            $pelatihan = "";
            for ($i = 8; $i < 18; $i++) {
                if(empty($sheetData[$i][1])){
                    break;
                }            
                $val_pelatihan = $sheetData[$i][1];
                $val_penyelenggara = $sheetData[$i][2];
                $val_waktu = $sheetData[$i][3];
                $pelatihan .= "<tr>
                <td>".$sheetData[$i][0]."</td>               
                <td>".$val_pelatihan."</td>    
                <td>".$val_penyelenggara."</td>              
                <td>".$val_waktu."</td>              
                </tr>";
            }
            $pelatihan  = $header_pelatihan.$pelatihan.$footer;

            // penghargaan
            $header_penghargaan = "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\" style=\"text-align: left;\">No</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Penghargaan & Paten</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Tahun</th>
                                        </tr>";            
            $penghargaan = "";
            for ($i = 20; $i < 30; $i++) {   
                if(empty($sheetData[$i][1])){
                    break;
                }           
                $val_penghargaan = $sheetData[$i][1];
                $val_tahun_enghargaan = $sheetData[$i][2];
                $penghargaan .= "<tr>
                <td>".$sheetData[$i][0]."</td>               
                <td>".$val_penghargaan."</td>    
                <td>".$val_tahun_enghargaan."</td>              
                </tr>";
            }
            $penghargaan  = $header_penghargaan.$penghargaan.$footer;

            // aktivitas
            $header_aktivitas = "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\" style=\"text-align: left;\">No</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Aktivitas Penunjang (buku/publikasi)</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Tahun</th>
                                        </tr>";
            $aktivitas = "";
            for ($i = 32; $i < 42; $i++) {        
                if(empty($sheetData[$i][1])){
                    break;
                }      
                $val_aktivitas = $sheetData[$i][1];
                $val_tahun_aktivitas = $sheetData[$i][2];
                $aktivitas .= "<tr>
                <td>".$sheetData[$i][0]."</td>               
                <td>".$val_aktivitas."</td>    
                <td>".$val_tahun_aktivitas."</td>                            
                </tr>";
            }
            $aktivitas  = $header_aktivitas.$aktivitas.$footer;
            
            $data = array(                
                'name'=>$nama_staff,                           
                'name_seo'=>seo_title($nama_staff),
                'nipnik'=>$nik,
                'pelayanan'=>$bidang_pelayanan,
                'tupoksi'=>$tupoksi,
                'pelatihan'=>$pelatihan,
                'penghargaan'=>$penghargaan,                			
                'penunjang'=>$aktivitas,
                'uploader'=>$this->session->username,
                'foto'=>'default.png'
            );
            $this->model_app->insert('staff_pendidik',$data);         
        }else{
            return false;
        }
    }

    function staff_pendidik(){
        cek_session_admin();
        $data['record'] = $this->model_app->view_ordering('staff_pendidik','urutan','ASC');
        $this->template->load('administrator/template','administrator/mod_staff/view_staff',$data);
    }

    function tambah_staff(){
        cek_session_admin();
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/foto_staff/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')){
                $hasil=$this->upload->data();
                $data = array(
                    'name'=>$this->input->post('name'),                           
                    'name_seo'=>seo_title($this->input->post('name')),
                    'nipnik'=>$this->input->post('nipnik'),
                    'pelayanan'=>$this->input->post('pelayanan'),
                    'tupoksi'=>$this->input->post('tupoksi'),
                    'pelatihan'=>$this->input->post('pelatihan'),
                    'penghargaan'=>$this->input->post('penghargaan'),                			
                    'penunjang'=>$this->input->post('penunjang'),
                    'uploader'=>$this->session->username,                 
                    'foto'=>$hasil['file_name'],
                    'urutan'=>$this->input->post('urutan'),
                );
            }else{
                $data = array(
                    'name'=>$this->input->post('name'),                           
                    'name_seo'=>seo_title($this->input->post('name')),
                    'nipnik'=>$this->input->post('nipnik'),
                    'pelayanan'=>$this->input->post('pelayanan'),
                    'tupoksi'=>$this->input->post('tupoksi'),
                    'pelatihan'=>$this->input->post('pelatihan'),
                    'penghargaan'=>$this->input->post('penghargaan'),                			
                    'penunjang'=>$this->input->post('penunjang'),
                    'uploader'=>$this->session->username,
                    'foto'=>'default.png',
                    'urutan'=>$this->input->post('urutan'),
                );
                }
            $this->model_app->insert('staff_pendidik',$data);  
            redirect('staff');    
        }else{
            $data['record'] = $this->model_app->view_ordering('staff_pendidik','id','DESC');
            $this->template->load('administrator/template','administrator/mod_staff/view_staff_tambah',$data);
        }
    }

    function edit_staff($id){
        cek_session_admin();
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/foto_staff/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
           
           if ($this->upload->do_upload('foto')){
                $hasil=$this->upload->data();
                $data = array('name'=>$this->input->post('name'),                           
                            'name_seo'=>seo_title($this->input->post('name')),
                            'nipnik'=>$this->input->post('nipnik'),
                            'pelayanan'=>$this->input->post('pelayanan'),
                            'tupoksi'=>$this->input->post('tupoksi'),
                            'pelatihan'=>$this->input->post('pelatihan'),
                            'penghargaan'=>$this->input->post('penghargaan'),                			
                            'penunjang'=>$this->input->post('penunjang'),
                            'uploader'=>$this->session->username,                       
                            'foto'=>$hasil['file_name'],
                            'urutan'=>$this->input->post('urutan'),
                        );
                if("default.png"!=$this->input->post('oldFile')){
                    unlink('asset/foto_staff/'.$this->input->post('oldFile'));
                }
            }else{
                $data = array('name'=>$this->input->post('name'),                           
                            'name_seo'=>seo_title($this->input->post('name')),
                            'nipnik'=>$this->input->post('nipnik'),
                            'pelayanan'=>$this->input->post('pelayanan'),
                            'tupoksi'=>$this->input->post('tupoksi'),
                            'pelatihan'=>$this->input->post('pelatihan'),
                            'penghargaan'=>$this->input->post('penghargaan'),                			
                            'penunjang'=>$this->input->post('penunjang'),
                            'uploader'=>$this->session->username,
                            'urutan'=>$this->input->post('urutan'),
                        );              
            }
            $where = array('id' => $this->input->post('id'));
            $this->model_app->update('staff_pendidik', $data, $where);
            redirect('staff');  
        }else{
            $proses = $this->model_app->edit('staff_pendidik', array('id' => $id))->row_array();       
            $data['rows'] = $proses;
            $this->template->load('administrator/template','administrator/mod_staff/view_staff_edit',$data);
        }
    }

    function delete_staff($id){   
        cek_session_admin();    
        $data = $this->model_app->select_where("staff_pendidik","id",$id);
        if("default.png"!=$data[0]['foto']){
            unlink('asset/foto_staff/'.$data[0]['foto']);
        }
        $this->model_app->delete('staff_pendidik',array('id' => $id));
        redirect('staff');        
    }

}