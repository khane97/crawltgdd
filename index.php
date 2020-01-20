<?php

include_once 'class/config.php';
include_once 'class/crawl.php';
// include_once 'PHPExcel/Classes/PHPExcel.php';
// include_once 'class/simple_html_dom.php';

$config = new Config;
$crawlreview = new Crawl;
// $links = array (
//     'review Nokia 8.1'       => 'https://www.thegioididong.com/dtdd/nokia-81/danh-gia',
//     'review Nokia 7.2'       => 'https://www.thegioididong.com/dtdd/nokia-72/danh-gia',
//     'review Nokia 6.1 plus'  => 'https://www.thegioididong.com/dtdd/nokia-61-plus/danh-gia',
//     'review Nokia 5.1 plus'  => 'https://www.thegioididong.com/dtdd/nokia-51-plus/danh-gia',
//     'review Nokia 3.2'       => 'https://www.thegioididong.com/dtdd/nokia-32/danh-gia',
//     'review Nokia 3.2 16gb'  => 'https://www.thegioididong.com/dtdd/nokia-32-16gb/danh-gia',
//     'review Nokia 2.3'       => 'https://www.thegioididong.com/dtdd/nokia-23/danh-gia',
//     'review Nokia 2720 2019' => 'https://www.thegioididong.com/dtdd/nokia-2720-2019/danh-gia',

// );

// foreach($links as $name => $link)
// {

    //duaw link vao va xuat ra mang chua thong tin review
    $link = 'https://www.thegioididong.com/dtdd/nokia-23/danh-gia';
    $phantrang = $config->setPag($link);
    echo '<strong><br> co tat ca '. $sumtrang.'</strong>'.'<br>';
    if($sumtrang >0)
        {
            for($i = 0; $i<= $sumtrang;$i++)
            {
                $html = file_get_html($link.'?p='.$i);
                foreach($html->find('.ratingLst .par .rh') as $element)
                {
                    foreach ($element->find('span') as $span) {
                        # code...
                        $name = $span->plaintext;
                        // $thongtin['ten nokia']['name'] = $name;
                        
                    }
                    foreach($element->find('label') as $label)
                    {
                        $sale =$label->plaintext;
                        // $thongtin['ten nokia']['cho mua'] = $label;
                    }
                    echo $name .' '.$sale .'<br>';
                    // $thongtin['ten nokia'][]
                }  
            }
        }
        else
        {
        $html = file_get_html($link);
        foreach($html->find('.ratingLst .par .rh') as $element)
        {
            foreach ($element->find('span') as $span) {
                # code...
                $name = $span->plaintext;
                
            }
            foreach($element->find('label') as $label)
            {
                $sale =$label->plaintext;
                
                    
            } 
            echo $name .' '.$sale.'<br>';
        }  
        }

$review = $crawlreview->getdataName($link );
echo '<pre>';

print_r($thongtin);
// $excel = new PHPExcel;
// $excel->setActiveSheetIndex(0);
// $excel->getActiveSheet()->setTitle('nokia 2.3');
// $excel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
// $excel->getActiveSheet()->getColumnDimension('B')->setWidth(50);
// $excel->getActiveSheet()->getColumnDimension('C')->setWidth(40);
// $excel->getActiveSheet()->getColumnDimension('D')->setWidth(40);
// $excel->getActiveSheet()->getStyle('A1:D1')->getFont()->setBold(true);

// // $excel
// $numRow =2;
// $excel->getActiveSheet()->setCellValue('A1', 'Tên');
// $excel->getActiveSheet()->setCellValue('B1', 'Chỗ mua');
// $excel->getActiveSheet()->setCellValue('C1', 'Nội dung');
// $excel->getActiveSheet()->setCellValue('D1', 'thời gian');
// foreach ($thongtin as $t) {
//     $excel->getActiveSheet()->setCellValue('A' . $numRow, $t['ten']);
//     $excel->getActiveSheet()->setCellValue('B' . $numRow, $t['ban']);
//     $excel->getActiveSheet()->setCellValue('c' . $numRow, $t['nx']);
//     $excel->getActiveSheet()->setCellValue('D' . $numRow, $t['tg']);
//     // $excel->getActiveSheet()->setCellValue('C' . $numRow, $row[2]);
//     $numRow++;
// }

// PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('datas.xlsx');
















// $links = array (
//     'review Nokia 8.1'       => 'https://www.thegioididong.com/dtdd/nokia-81/danh-gia,',
//     'review Nokia 7.2'       => 'https://www.thegioididong.com/dtdd/nokia-72/danh-gia',
//     'review Nokia 6.1 plus'  => 'https://www.thegioididong.com/dtdd/nokia-61-plus/danh-gia',
//     'review Nokia 5.1 plus'  => 'https://www.thegioididong.com/dtdd/nokia-51-plus/danh-gia',
//     'review Nokia 3.2'       => 'https://www.thegioididong.com/dtdd/nokia-32/danh-gia',
//     'review Nokia 3.2 16gb'  => 'https://www.thegioididong.com/dtdd/nokia-32-16gb/danh-gia',
//     'review Nokia 2.3'       => 'https://www.thegioididong.com/dtdd/nokia-23/danh-gia',
//     'review Nokia 2720 2019' => 'https://www.thegioididong.com/dtdd/nokia-2720-2019/danh-gia',
// );

// echo '<pre>';
// print_r($links);
















































































