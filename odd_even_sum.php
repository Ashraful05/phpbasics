<?php


class Odd_Even_Sum
{
    public function oddevensum($data)
    {
//        $sum = 0;
//        $startingNumber = $data['starting_number'];
//        $endingNumber  = $data['ending_number'];
//        $choice        = $data['choice'];
//        if($startingNumber>=$endingNumber)
//        {
//            for($i=$startingNumber;$i<=$endingNumber;$i++)
//            {
//                if($choice=='even') {
//                    if ($i % 2 == 0) {
//                        $sum = $sum + $i;
//                    }
//                }else {
//                    if($i%2!=0)
//                    {
//                        $sum = $sum + $i;
//                    }
//                }
//            }
//        }
//        else {
//            for($i=$startingNumber;$i>=$endingNumber;$i--)
//            {
//                if($choice=='odd'){
//                    if($i%2!=0){
//                        $sum = $sum + $i;
//                    }
//                }else{
//                    if($i%2==0){
//                        $sum=$sum+$i;
//                    }
//                }
//            }
//        }
//        return $sum;
//    }
        {
            $sum=0;
            $startingNumber = $data['starting_number'];
            $endingNumber   = $data['ending_number'];
            $choice         = $data['choice'];

            if($startingNumber<=$endingNumber)
            {
                for($i=$startingNumber;$i<=$endingNumber;$i++)
                {
                    if($choice=='odd')
                    {
                        if($i%2!=0)
                        {
                            $sum=$sum+$i;
                        }
                    }
                    else
                    {
                        if($i%2==0)
                        {
                            $sum=$sum+$i;
                        }
                    }
                }
            }
            else
            {
                for($i=$startingNumber;$i>=$endingNumber;$i--) {
                    if ($choice == 'odd')
                    {
                        if($i%2!=0)
                        {
                            $sum=$sum+$i;
                        }
                    }else{
                        if($i%2==0)
                        {
                            $sum=$sum+$i;
                        }
                    }
                }
            }
            return $sum;
        }
    }
}