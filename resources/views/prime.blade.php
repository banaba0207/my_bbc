@extends('layout')

@section('content')
    <h1> Max Number is {{ $num }} </h1>
    
    <?php
        for($i = 3; $i < $num; ++$i){
            $flag = 1;
            for($j = 2; $j < sqrt($i); ++$j){
                if($i % $j == 0){
                    $flag = 0;
                    break;
                }
            }
            if($flag == 1){
                print($i);
                print(' is prime.<br>');
            }
        }
    ?>

@endsection
