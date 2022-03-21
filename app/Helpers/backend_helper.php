<?php
use App\User;
use App\Model\RollCall;
use App\Model\Payment;
use App\Model\Fee;
function showPrettyStatus($status)
{
    switch ($status) {
        case TRUE:
            return '<i class="fa fa-check-circle text-green"></i>';
            break;
        case FALSE:
            return '<i class="fa fa-times-circle-o text-red"></i>';
            break;
    }
}
function getId($id){
	$data = RollCall::where('student_registers_id','=',$id)->where('date','=',date("Y-m-d"))->orderBy('updated_at', 'DESC')->first();
	if($data == null)
		return "2";
	return $data->attendance;
}
function getRemark($id){
    $data = RollCall::where('student_registers_id','=',$id)->where('date','=',date("Y-m-d"))->orderBy('updated_at', 'DESC')->first();
    if($data == null)
        return "2";
    return $data->remark;
}
function showPrettyAttendance($attendance)
{
    switch ($attendance) {
        case TRUE:
            return '<i class="fa fa-check-circle text-green">Present</i>';
            break;
        case FALSE:
            return '<i class="fa fa-times-circle-o text-red">Absent</i>';
            break;
    }
}
function getRecord($id){
    $data = RollCall::whereRaw('created_at IN (select MAX(created_at) FROM roll_calls GROUP BY date,student_registers_id)')
        ->where('student_registers_id','=',$id)
        ->orderBy('date', 'DESC')
        ->get();
    return $data;
}
 function getPayment($id){
    $data = Payment::whereRaw('created_at IN (select MAX(created_at) FROM payments GROUP BY date,student_registers_id)')
        ->where('student_registers_id','=',$id)
        ->orderBy('date', 'DESC')
        ->get();
    return $data;
}
function en($string) {
    if(FALSE == strpos($string, "|&|")) {
        return $string;
    }
    $array = explode("|&|", $string);
    return $array[0];
}

function mm($string) {
    if(FALSE == strpos($string, "|&|")) {
        return $string;
    }
    $array = explode("|&|", $string);
    return $array[1];
}
function languageSwitcher($string){
    if(FALSE == strpos($string, "|&|")) {
        return $string;
    }
    $array = explode("|&|", $string);
    if ('en' == Session::get('locale')) {
        return $array[0];
    } else {
        return $array[1];
    }
    return $array[1];
}
