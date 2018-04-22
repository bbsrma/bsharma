//how to use carbon

$dt = Carbon::now();
        $now=$dt->format('d-m-Y');

        $previousdate='';
        //$dt->toDateString(); // Equivalent: echo $dt->format('Y-m-d');
        $message = Message::where('id', 1)
               ->get();
               foreach($message as $msg){

                 $end=$msg->created_at;
                    
               //$previousdate = $end->format('d-m-Y');
                }

                $length = $end->diffInMonths($dt);

                return $length;