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
        $spreadsheet->getActiveSheet()->getStyle('A10:C10')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A22:C22')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A34:E34')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A46:E46')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A58:B58')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A70:F70')->applyFromArray($styleHeader);
        $spreadsheet->getActiveSheet()->getStyle('A82:C82')->applyFromArray($styleHeader);


        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A2', 'Atribut')
        ->setCellValue('B2', 'Value');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A10', 'No')
        ->setCellValue('B10', 'Pendidikan')
        ->setCellValue('C10', 'Tahun');
        
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A22', 'No')
        ->setCellValue('B22', 'Penghargaan')
        ->setCellValue('C22', 'Tahun');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A34', 'No')
        ->setCellValue('B34', 'Judul Penelitian')
        ->setCellValue('C34', 'Peneliti')
        ->setCellValue('D34', 'Tahun')
        ->setCellValue('E34', 'Sumber Dana');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A46', 'No')
        ->setCellValue('B46', 'Judul Artikel')
        ->setCellValue('C46', 'Penulis')
        ->setCellValue('D46', 'Tahun')
        ->setCellValue('E46', 'Nama Jurnal');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A58', 'No')
        ->setCellValue('B58', 'Link Publikasi');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A70', 'No')
        ->setCellValue('B70', 'Judul Buku')
        ->setCellValue('C70', 'Penulis')
        ->setCellValue('D70', 'Tahun')
        ->setCellValue('E70', 'Penerbit')
        ->setCellValue('F70', 'ISBN');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A82', 'No')
        ->setCellValue('B82', 'Kegiatan Pengabdian')
        ->setCellValue('C82', 'Tahun');

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A3', 'Name')
        ->setCellValue('A4', 'NIP')
        ->setCellValue('A5', 'NIDN')
        ->setCellValue('A6', 'Golongan/Pangkat')
        ->setCellValue('A7', 'Bidang Ilmu')
        ->setCellValue('A8', 'Blog');    

        for ($i = 3; $i < 9; $i++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $i)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $i)->applyFromArray($styleBody);
        }

        $count = 1;
        for ($j = 11; $j < 21; $j++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $j)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $j)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('C' . $j)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getCell('A' . $j)
            ->setValueExplicit(
                $count,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            $count++;
        }

        $countPenghargaan = 1;
        for ($k = 23; $k < 33; $k++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $k)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $k)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('C' . $k)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getCell('A' . $k)
            ->setValueExplicit(
                $countPenghargaan,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            $countPenghargaan++;
        }

        $countPenelitian = 1;
        for ($l = 35; $l < 45; $l++) {
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
            $countPenelitian++;
        }

        $countPublikasi = 1;
        for ($m = 47; $m < 57; $m++) {
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
            $countPublikasi++;
        }

        $countLink = 1;
        for ($n = 59; $n < 69; $n++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $n)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $n)->applyFromArray($styleBody);           
            $spreadsheet->getActiveSheet()->getCell('A' . $n)
            ->setValueExplicit(
                $countLink,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            $countLink++;
        }

        $countBuku = 1;
        for ($o = 71; $o < 81; $o++) {
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
            $countBuku++;
        }

        $countPengabdian = 1;
        for ($p = 83; $p < 93; $p++) {
            $spreadsheet->getActiveSheet()->getStyle('A' . $p)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('B' . $p)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getStyle('C' . $p)->applyFromArray($styleBody);
            $spreadsheet->getActiveSheet()->getCell('A' . $p)
            ->setValueExplicit(
                $countPengabdian,
                \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
            );
            $countPengabdian++;
        }

        $spreadsheet->getActiveSheet()->getStyle('A' . 8)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('B' . 8)->applyFromArray($styleFooter);

        $spreadsheet->getActiveSheet()->getStyle('A' . 20)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('B' . 20)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('C' . 20)->applyFromArray($styleFooter);

        $spreadsheet->getActiveSheet()->getStyle('A' . 32)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('B' . 32)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('C' . 32)->applyFromArray($styleFooter);

        $spreadsheet->getActiveSheet()->getStyle('A' . 44)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('B' . 44)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('C' . 44)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('D' . 44)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('E' . 44)->applyFromArray($styleFooter);

        $spreadsheet->getActiveSheet()->getStyle('A' . 56)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('B' . 56)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('C' . 56)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('D' . 56)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('E' . 56)->applyFromArray($styleFooter);

        $spreadsheet->getActiveSheet()->getStyle('A' . 68)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('B' . 68)->applyFromArray($styleFooter);

        $spreadsheet->getActiveSheet()->getStyle('A' . 80)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('B' . 80)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('C' . 80)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('D' . 80)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('E' . 80)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('F' . 80)->applyFromArray($styleFooter);

        $spreadsheet->getActiveSheet()->getStyle('A' . 92)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('B' . 92)->applyFromArray($styleFooter);
        $spreadsheet->getActiveSheet()->getStyle('C' . 92)->applyFromArray($styleFooter);


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
            $nama_dosen = $sheetData[2][1];
            $nipnik = $sheetData[3][1];
            $nidn = $sheetData[4][1];
            $golpang = $sheetData[5][1];
            $bidang = $sheetData[6][1];
            $blog = $sheetData[7][1];           
            
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
            for ($i = 10; $i < 20; $i++) {
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
            for ($i = 22; $i < 32; $i++) {   
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
            for ($i = 34; $i < 44; $i++) {        
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
            for ($i = 46; $i < 56; $i++) {  
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
                                            <th scope=\"col\" style=\"text-align: center;\">Link Publikasi</th>                                            
                                        </tr>";
            $linkpub = "";
            for ($i = 58; $i < 68; $i++) {    
                if(empty($sheetData[$i][1])){
                    break;
                }          
                $valLink = $sheetData[$i][1];
                $linkpub .= "<tr>
                <td>".$sheetData[$i][0]."</td>               
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
            for ($i = 70; $i < 80; $i++) {     
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
            for ($i = 82; $i < 92; $i++) {    
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
            // print_r($data);            
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
        $data['record'] = $this->model_app->view_ordering('dosen','id_dosen','DESC');        
        $this->template->load('administrator/template','administrator/mod_dosen/view_dosen',$data);
    }

    function tambah_dosen(){
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('d');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array(
                    'username'=>$this->session->username,
                    'nm_dosen'=>$this->input->post('name'),
                    'dosen_seo'=>seo_title($this->input->post('name')),
                    'golpang'=>$this->input->post('golpang'),
                    'nipnik'=>$this->input->post('nipnik'),
                    'nidn'=>$this->input->post('nidn'),
                    'bidang'=>$this->input->post('bidang'),
                    'blog'=>$this->input->post('blog'),
                    'pendidikan'=>$this->input->post('pendidikan'),
                    'gbr_dosen'=>'default.png',
                    'penghargaan'=>$this->input->post('penghargaan'),
                    'penelitian'=>$this->input->post('penelitian'),
                    'publikasi'=>$this->input->post('publikasi'),
                    'linkpub'=>$this->input->post('linkpub'),
                    'buku'=>$this->input->post('buku'),
                    'pengabdian'=>$this->input->post('pengabdian'));
            }else{
                $data = array(
                    'username'=>"admin",
                    'nm_dosen'=>$this->input->post('name'),
                    'dosen_seo'=>seo_title($this->input->post('name')),
                    'golpang'=>$this->input->post('golpang'),
                    'nipnik'=>$this->input->post('nipnik'),
                    'nidn'=>$this->input->post('nidn'),
                    'bidang'=>$this->input->post('bidang'),
                    'blog'=>$this->input->post('blog'),
                    'pendidikan'=>$this->input->post('pendidikan'),
                    'gbr_dosen'=>$hasil['file_name'],
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
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('d');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array(
                            'username'=>$this->session->username,
                            'nm_dosen'=>$this->input->post('name'),
                            'dosen_seo'=>seo_title($this->input->post('name')),
                            'golpang'=>$this->input->post('golpang'),
                			'nipnik'=>$this->input->post('nipnik'),
                			'nidn'=>$this->input->post('nidn'),
                			'bidang'=>$this->input->post('bidang'),
                			'blog'=>$this->input->post('blog'),
                            'gbr_dosen'=>'default.png',
                            'penghargaan'=>$this->input->post('penghargaan'),
                			'pendidikan'=>$this->input->post('pendidikan'),
                			'penelitian'=>$this->input->post('penelitian'),
                			'publikasi'=>$this->input->post('publikasi'),
                			'linkpub'=>$this->input->post('linkpub'),
                			'buku'=>$this->input->post('buku'),
                            'pengabdian'=>$this->input->post('pengabdian'));
            }else{
                $data = array('id_fakultas'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'nm_dosen'=>$this->input->post('b'),
                            'dosen_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                            'nidn'=>$this->input->post('d'),
                            'hp'=>$this->input->post('e'),
                            'gbr_dosen'=>$hasil['file_name']);
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
        $this->model_app->delete('dosen',array('id_dosen' => $id));
        redirect('dosen');
    }
    
}
