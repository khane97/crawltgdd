<?php 
include_once 'simple_html_dom.php';
// include_once 'PHPExcel/Classes/PHPExcel.php';

class Config
{
    public function setPag($url)
    {
        global $sumtrang;
        $html = file_get_html($url);
        $sotrang = $html->find('.pagcomment a');
        $dem = count($sotrang);

        if($sotrang  == null)
        {
            $sumtrang = 0;
        }
        else{
            $sumtrang = $sotrang[$dem-2]->plaintext;
        }
        
        
    }

    // public function setExcel($title, )
    // {
    //     $excel = new PHPExcel;
    //     $excel->setActiveSheetIndex(0);
    //     $excel->getActiveSheet()->setTitle($title);
    //     $excel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
    //     $excel->getActiveSheet()->getColumnDimension('B')->setWidth(50);
    //     // $excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
    //     $excel->getActiveSheet()->getStyle('A1:B1')->getFont()->setBold(true);

    //     // $excel
    //     $excel->getActiveSheet()->setCellValue('A1', 'Tên');
    //     $excel->getActiveSheet()->setCellValue('B1', 'Chỗ mua');
    //     foreach ($data as $row) {
    //         $excel->getActiveSheet()->setCellValue('A' . $numRow, $row[0]);
    //         $excel->getActiveSheet()->setCellValue('B' . $numRow, $row[1]);
    //         $excel->getActiveSheet()->setCellValue('C' . $numRow, $row[2]);
    //         $numRow++;
    //     }
    // }
}