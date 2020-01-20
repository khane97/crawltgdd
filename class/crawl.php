<?php 


class Crawl extends Config
{

    public function getdataName($review)
    {
        global $sumtrang;
        global $ten ;
        global $muatai;
        global $thongtin;
        if($sumtrang >0)
        {
            for($i = 0; $i<= $sumtrang;$i++)
            {
                $html = file_get_html($review.'?p='.$i);
                foreach($html->find('.ratingLst .par ') as $element)
                {
                    foreach ($element->find('.rh span') as $span) {
                        # code...
                        $name = $span->plaintext; 
                    }
                    foreach($element->find('.rh label') as $label)
                    {
                        $sale =$label->plaintext;
                    }
                    foreach($element->find('.rc p i') as $i)
                    {
                        $content =$i->plaintext;
                    }
                    foreach($element->find('.ra a') as $a)
                    {
                        $time =$a->plaintext;
                    }
                    // $ten[] =$name;
                    // $muatai[]= $label;
                    $thongtin[]= ['ten'=>$name,'ban'=>$sale,'nx'=>$content,'tg'=>$time];
                    
                }  
            }
        }
        else
        {
        $html = file_get_html($review);
        foreach($html->find('.ratingLst .par') as $element)
        {
            foreach ($element->find('.rh span') as $span) {
                # code...
                $name = $span->plaintext;
                
            }
            foreach($element->find('.rh label') as $label)
            {
                $sale =$label->plaintext;
                
                    
            } 
            foreach($element->find('.rc p i') as $i)
            {
                $content =$i->plaintext;
                
            }
            foreach($element->find('.ra a') as $a)
            {
                $time =$a->plaintext;
                
            }
            // $ten[] =$name;
            // $muatai[]= $label;
            $thongtin[]= ['ten'=>$name,'ban'=>$sale,'nx'=>$content,'tg'=>$time];
            
        }  
        }
        
    }
}

