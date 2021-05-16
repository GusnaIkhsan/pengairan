<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DosenController extends CI_Controller {

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
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);

        $spreadsheet->getActiveSheet()->getStyle('A2:B2')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A11:C11')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A23:C23')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A35:E35')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A47:E47')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A59:B59')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A71:F71')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A83:C83')->applyFromArray($styleHeader);

        // Header
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A2', 'Keterangan')
        ->setCellValue('B2', 'Isi');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A11', 'No')
        ->setCellValue('B11', 'Background Pendidikan')
        ->setCellValue('C11', 'Tahun');
        
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A23', 'No')
        ->setCellValue('B23', 'Penghargaan')
        ->setCellValue('C23', 'Tahun');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A35', 'No')
        ->setCellValue('B35', 'Judul Penelitian')
        ->setCellValue('C35', 'Peneliti')
        ->setCellValue('D35', 'Tahun')
        ->setCellValue('E35', 'Sumber Dana');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A47', 'No')
        ->setCellValue('B47', 'Judul Artikel')
        ->setCellValue('C47', 'Penulis')
        ->setCellValue('D47', 'Tahun')
        ->setCellValue('E47', 'Nama Jurnal');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A59', 'No')
        ->setCellValue('B59', 'Publikasi')
        ->setCellValue('C59', 'Link Publikasi');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A71', 'No')
        ->setCellValue('B71', 'Judul Buku')
        ->setCellValue('C71', 'Penulis')
        ->setCellValue('D71', 'Tahun')
        ->setCellValue('E71', 'Penerbit')
        ->setCellValue('F71', 'ISBN');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A83', 'No')
        ->setCellValue('B83', 'Pengabdian')
        ->setCellValue('C83', 'Tahun');

        // Kolom
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A3', 'Nama')
        ->setCellValue('A4', 'Golongan & Pangkat')
        ->setCellValue('A5', 'NIP/NIK')
        ->setCellValue('A6', 'NIDN')
        ->setCellValue('A7', 'Bidang Ilmu')
        ->setCellValue('A8', 'Email')
        ->setCellValue('A9', 'Blog Dosen');    

        for ($i = 3; $i < 10; $i++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $i)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $i)->applyFromArray($styleBody);
        }
        $spreadsheet->getActiveSheet()->getStyle('A' . 9)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('B' . 9)->applyFromArray($styleFooter);

        $count = 1;
        for ($j = 12; $j < 22; $j++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $j)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $j)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('C' . $j)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getCell('A' . $j)
            ->setValueExplicit(
                $count,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            if ($j==21){
                $spreadsheet->getActiveSheet()->getStyle('A' . $j)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('B' . $j)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('C' . $j)->applyFromArray($styleFooter);
            }
            $count++;
        }

        $countPenghargaan = 1;
        for ($k = 24; $k < 34; $k++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $k)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $k)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('C' . $k)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getCell('A' . $k)
            ->setValueExplicit(
                $countPenghargaan,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            if ($k==33){
                $spreadsheet->getActiveSheet()->getStyle('A' . $k)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('B' . $k)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('C' . $k)->applyFromArray($styleFooter);
            }
            $countPenghargaan++;
        }

        $countPenelitian = 1;
        for ($l = 36; $l < 46; $l++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $l)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $l)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('C' . $l)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('D' . $l)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('E' . $l)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getCell('A' . $l)
            ->setValueExplicit(
                $countPenelitian,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            if ($l==45){
                $spreadsheet->getActiveSheet()->getStyle('A' . $l)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('B' . $l)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('C' . $l)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('D' . $l)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('E' . $l)->applyFromArray($styleFooter);
            }
            $countPenelitian++;
        }

        $countPublikasi = 1;
        for ($m = 48; $m < 58; $m++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $m)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $m)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('C' . $m)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('D' . $m)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('E' . $m)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getCell('A' . $m)
            ->setValueExplicit(
                $countPublikasi,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            if ($m==57){
                $spreadsheet->getActiveSheet()->getStyle('A' . $m)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('B' . $m)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('C' . $m)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('D' . $m)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('E' . $m)->applyFromArray($styleFooter);

            }
            $countPublikasi++;
        }

        $countLink = 1;
        for ($n = 60; $n < 70; $n++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $n)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $n)->applyFromArray($styleBody);           
            $spreadsheet->getActiveSheet()->getCell('A' . $n)
            ->setValueExplicit(
                $countLink,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            if ($n==69){
                $spreadsheet->getActiveSheet()->getStyle('A' . $n)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('B' . $n)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('C' . $n)->applyFromArray($styleFooter);
            }
            $countLink++;
        }

        $countBuku = 1;
        for ($o = 72; $o < 82; $o++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $o)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $o)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('C' . $o)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('D' . $o)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('E' . $o)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('F' . $o)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getCell('A' . $o)
            ->setValueExplicit(
                $countBuku,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            if ($o==81){
                $spreadsheet->getActiveSheet()->getStyle('A' . $o)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('B' . $o)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('C' . $o)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('D' . $o)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('E' . $o)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('F' . $o)->applyFromArray($styleFooter);
            }
            $countBuku++;
        }

        $countPengabdian = 1;
        for ($p = 84; $p < 94; $p++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $p)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $p)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('C' . $p)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getCell('A' . $p)
            ->setValueExplicit(
                $countPengabdian,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            if ($p==93){
                $spreadsheet->getActiveSheet()->getStyle('A' . $p)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('B' . $p)->applyFromArray($styleFooter);
                $spreadsheet->getActiveSheet()->getStyle('C' . $p)->applyFromArray($styleFooter);
            }
            $countPengabdian++;
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

        $fileName = "Tambah-Data-Dosen-" . date("dmYhis") . ".xlsx";

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
            $nama_dosen = $this->nullCheck($sheetData[2][1]);
            $golpang = $this->nullCheck($sheetData[3][1]);
            $nipnik = $this->nullCheck($sheetData[4][1]);
            $nidn = $this->nullCheck($sheetData[5][1]);
            $bidang = $this->nullCheck($sheetData[6][1]);
            $email = $this->nullCheck($sheetData[7][1]);              
            $blog = $this->nullCheck($sheetData[8][1]);              
            
            
            
            
            // pendidikann
            $headerPendididkan = "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\" style=\"text-align: left;\">No</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Pendidikan</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Tahun</th>
                                        </tr>";
            $footer = "</thead>
                        </table>";
            $pendidikan = "";
            for ($i = 11; $i < 21; $i++) {
                if(empty($sheetData[$i][1])){
                    break;
                }            
                $valPendidikan = $sheetData[$i][1];
                $valTahunPendidikan = $sheetData[$i][2];
                $pendidikan .= "<tr>
                <td>".$sheetData[$i][0]."</td>               
                <td>".$valPendidikan."</td>    
                <td>".$valTahunPendidikan."</td>              
                </tr>";
            }
            $pendidikan  = $headerPendididkan.$pendidikan.$footer;

            // penghargaan
            $headerPenghargaan = "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\" style=\"text-align: left;\">No</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Penghargaan</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Tahun</th>
                                        </tr>";            
            $penghargaan = "";
            for ($i = 23; $i < 33; $i++) {   
                if(empty($sheetData[$i][1])){
                    break;
                }           
                $valPenghargaan = $sheetData[$i][1];
                $valTahunPenghargaan = $sheetData[$i][2];
                $penghargaan .= "<tr>
                <td>".$sheetData[$i][0]."</td>               
                <td>".$valPenghargaan."</td>    
                <td>".$valTahunPenghargaan."</td>              
                </tr>";
            }
            $penghargaan  = $headerPenghargaan.$penghargaan.$footer;

            // penelitian
            $headerPenelitian = "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\" style=\"text-align: left;\">No</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Judul Penelitian</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Peneliti</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Tahun</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Sumber Dana</th>
                                        </tr>";
            $penelitian = "";
            for ($i = 35; $i < 45; $i++) {        
                if(empty($sheetData[$i][1])){
                    break;
                }      
                $valJudulPenelitian = $sheetData[$i][1];
                $valPeneliti = $sheetData[$i][2];
                $valTahunPenelitian = $sheetData[$i][3];
                $valSumberDana = $sheetData[$i][4];
                $penelitian .= "<tr>
                <td>".$sheetData[$i][0]."</td>               
                <td>".$valJudulPenelitian."</td>    
                <td>".$valPeneliti."</td>              
                <td>".$valTahunPenelitian."</td>              
                <td>".$valSumberDana."</td>              
                </tr>";
            }
            $penelitian  = $headerPenelitian.$penelitian.$footer;

            // publikasi
            $headerPublikasi = "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\" style=\"text-align: left;\">No</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Judul Artikel</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Penulis</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Tahun</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Nama Jurnal</th>
                                        </tr>";
            $publikasi = "";
            for ($i = 47; $i < 57; $i++) {  
                if(empty($sheetData[$i][1])){
                    break;
                }            
                $valJudulArtikel = $sheetData[$i][1];
                $valPenulis = $sheetData[$i][2];
                $valTahunPenulis = $sheetData[$i][3];
                $valNamaJurnal = $sheetData[$i][4];
                $publikasi .= "<tr>
                <td>".$sheetData[$i][0]."</td>               
                <td>".$valJudulArtikel."</td>    
                <td>".$valPenulis."</td>              
                <td>".$valTahunPenulis."</td>              
                <td>".$valNamaJurnal."</td>              
                </tr>";
            }
            $publikasi = $headerPublikasi.$publikasi.$footer;

            // link publikasi
            $headerLinkpub = "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\" style=\"text-align: left;\">No</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Publikasi</th>                                            
                                            <th scope=\"col\" style=\"text-align: center;\">Link Publikasi</th>                                            
                                        </tr>";
            $linkpub = "";
            for ($i = 59; $i < 69; $i++) {    
                if(empty($sheetData[$i][1])){
                    break;
                }          
                $valPub = $sheetData[$i][1];
                $valLink = $sheetData[$i][2];
                $linkpub .= "<tr>
                <td>".$sheetData[$i][0]."</td>               
                <td>".$valPub."</td>             
                <td>".$valLink."</td>             
                </tr>";
            }
            $linkpub = $headerLinkpub.$linkpub.$footer;

            // buku
            $headerBuku = "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\" style=\"text-align: left;\">No</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Judul Buku</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Penulis Buku</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Tahun</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Penerbit</th>
                                            <th scope=\"col\" style=\"text-align: center;\">ISBN</th>
                                        </tr>";
            $buku = "";
            for ($i = 71; $i < 81; $i++) {     
                if(empty($sheetData[$i][1])){
                    break;
                }         
                $valJudulBuku = $sheetData[$i][1];
                $valPenulisBuku = $sheetData[$i][2];
                $valTahunPenulisBuku = $sheetData[$i][3];
                $valPenerbit = $sheetData[$i][4];
                $valisbn = $sheetData[$i][5];
                $buku .= "<tr>
                <td>".$sheetData[$i][0]."</td>               
                <td>".$valJudulBuku."</td>    
                <td>".$valPenulisBuku."</td>              
                <td>".$valTahunPenulisBuku."</td>              
                <td>".$valPenerbit."</td>              
                <td>".$valisbn."</td>              
                </tr>";
            }
            $buku = $headerBuku.$buku.$footer;

            // pengabdian
            $headerPengabdian = "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\" style=\"text-align: left;\">No</th>
                                            <th scope=\"col\" style=\"text-align: center;\">Pengabdian</th>                                            
                                            <th scope=\"col\" style=\"text-align: center;\">Tahun</th>                                            
                                        </tr>";
            $pengabdian = "";
            for ($i = 83; $i < 93; $i++) {    
                if(empty($sheetData[$i][1])){
                    break;
                }          
                $valPengabdian = $sheetData[$i][1];
                $valTahunPengabdian = $sheetData[$i][2];
                $pengabdian .= "<tr>
                <td>".$sheetData[$i][0]."</td>               
                <td>".$valPengabdian."</td>    
                <td>".$valTahunPengabdian."</td>              
                </tr>";
            }
            $pengabdian = $headerPengabdian.$pengabdian.$footer;
            
            $data = array(                
                'username'=>$this->session->username,
                'nm_dosen'=>$nama_dosen,
                'dosen_seo'=>seo_title($nama_dosen),
                'golpang'=>$golpang,
                'nipnik'=>$nipnik,
                'nidn'=>$nidn,
                'bidang'=>$bidang,
                'email'=>$email,
                'blog'=>$blog,
                'pendidikan'=>$pendidikan,
                'gbr_dosen'=>"default.png",
                'penghargaan'=>$penghargaan,
                'penelitian'=>$penelitian,
                'publikasi'=>$publikasi,
                'linkpub'=>$linkpub,
                'buku'=>$buku,
                'pengabdian'=>$pengabdian,
            );

            $data = $this->model_app->insert('dosen',$data);         
        }else{
            return false;
        }
    }

    function get_fakultas(){
        $data = $this->model_app->view('fakultas');
        $result = $data->result_array();
        echo json_encode($result);
    }
    
    function dosen(){
        cek_session_admin();
        $data['record'] = $this->model_app->view_ordering('dosen','id_dosen','ASC');        
        $this->template->load('administrator/template','administrator/mod_dosen/view_dosen',$data);
    }

    function tambah_dosen(){
        cek_session_admin();
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('d')){
                $hasil=$this->upload->data();
                $data = array(
                    'username'=>$this->session->username,
                    'nm_dosen'=>$this->input->post('name'),
                    'dosen_seo'=>seo_title($this->input->post('name')),
                    'golpang'=>$this->input->post('golpang'),
                    'nipnik'=>$this->input->post('nipnik'),
                    'nidn'=>$this->input->post('nidn'),
                    'bidang'=>$this->input->post('bidang'),
                    'email'=>$this->input->post('email'),
                    'blog'=>$this->input->post('blog'),
                    'pendidikan'=>$this->input->post('pendidikan'),
                    'gbr_dosen'=>$hasil['file_name'],
                    'penghargaan'=>$this->input->post('penghargaan'),
                    'penelitian'=>$this->input->post('penelitian'),
                    'publikasi'=>$this->input->post('publikasi'),
                    'linkpub'=>$this->input->post('linkpub'),
                    'buku'=>$this->input->post('buku'),
                    'pengabdian'=>$this->input->post('pengabdian'));
            }else{
                $data = array(
                    'username'=>$this->session->username,
                    'nm_dosen'=>$this->input->post('name'),
                    'dosen_seo'=>seo_title($this->input->post('name')),
                    'golpang'=>$this->input->post('golpang'),
                    'nipnik'=>$this->input->post('nipnik'),
                    'nidn'=>$this->input->post('nidn'),
                    'bidang'=>$this->input->post('bidang'),
                    'email'=>$this->input->post('email'),
                    'blog'=>$this->input->post('blog'),
                    'pendidikan'=>$this->input->post('pendidikan'),
                    'gbr_dosen'=>'default.png',
                    'penghargaan'=>$this->input->post('penghargaan'),
                    'penelitian'=>$this->input->post('penelitian'),
                    'publikasi'=>$this->input->post('publikasi'),
                    'linkpub'=>$this->input->post('linkpub'),
                    'buku'=>$this->input->post('buku'),
                    'pengabdian'=>$this->input->post('pengabdian'));
            }
            $this->model_app->insert('dosen',$data);  
            redirect('dosen');
        }else{
            $this->template->load('administrator/template','administrator/mod_dosen/view_dosen_tambah');
        }
    }

    function edit_dosen($id){
        cek_session_admin();
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
           
            if ($this->upload->do_upload('d')){
                $hasil=$this->upload->data();
                $data = array(
                            'username'=>$this->session->username,
                            'nm_dosen'=>$this->input->post('name'),
                            'dosen_seo'=>seo_title($this->input->post('name')),
                            'golpang'=>$this->input->post('golpang'),
                			'nipnik'=>$this->input->post('nipnik'),
                			'nidn'=>$this->input->post('nidn'),
                			'bidang'=>$this->input->post('bidang'),
                            'email'=>$this->input->post('email'),
                			'blog'=>$this->input->post('blog'),
                            'gbr_dosen'=>$hasil['file_name'],
                            'penghargaan'=>$this->input->post('penghargaan'),
                			'pendidikan'=>$this->input->post('pendidikan'),
                			'penelitian'=>$this->input->post('penelitian'),
                			'publikasi'=>$this->input->post('publikasi'),
                			'linkpub'=>$this->input->post('linkpub'),
                			'buku'=>$this->input->post('buku'),
                            'pengabdian'=>$this->input->post('pengabdian'));
                if("default.png"!=$this->input->post('oldFile')){
                    unlink('asset/img_galeri/'.$this->input->post('oldFile'));
                }
            }else{
                $data = array(
                    'username'=>$this->session->username,
                    'nm_dosen'=>$this->input->post('name'),
                    'dosen_seo'=>seo_title($this->input->post('name')),
                    'golpang'=>$this->input->post('golpang'),
                    'nipnik'=>$this->input->post('nipnik'),
                    'nidn'=>$this->input->post('nidn'),
                    'bidang'=>$this->input->post('bidang'),
                    'email'=>$this->input->post('email'),
                    'blog'=>$this->input->post('blog'),
                    'penghargaan'=>$this->input->post('penghargaan'),
                    'pendidikan'=>$this->input->post('pendidikan'),
                    'penelitian'=>$this->input->post('penelitian'),
                    'publikasi'=>$this->input->post('publikasi'),
                    'linkpub'=>$this->input->post('linkpub'),
                    'buku'=>$this->input->post('buku'),
                    'pengabdian'=>$this->input->post('pengabdian'));
            }
            $where = array('id_dosen' => $this->input->post('id_dosen'));
            $this->model_app->update('dosen', $data, $where);
            redirect('dosen');
        }else{
            $proses = $this->model_app->edit('dosen', array('id_dosen' => $id))->row_array();            
            $data = array('rows' => $proses);
            $this->template->load('administrator/template','administrator/mod_dosen/view_dosen_edit',$data);
        }
    }

    function delete_dosen($id){
        cek_session_admin();
        $data = $this->model_app->select_where("dosen","id_dosen",$id);
        if("default.png"!=$data[0]['gmbr_dosen']){
            unlink('asset/foto_statis/'.$data[0]['gmbr_dosen']);
        }
        $this->model_app->delete('dosen',array('id_dosen' => $id));
        redirect('dosen');
    }
    
}
