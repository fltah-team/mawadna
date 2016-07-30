@extends('master')
@section('content')
<div class="container text-center">
    <div class="join">
        <div class="alert alert-info">
            <h2>
                 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                انضم لفريق موادنا </h2>
        </div>
        <form class="form-inline">
        <table border="0" align="center">
            <tr>
                <td>الاسم</td>
                <td><input name="name" class="form-control" placeholder="الاسم" /></td>
                <td>الايميل</td>
                <td><input name="name" class="form-control" placeholder="الايميل" /></td>
            </tr>
            <tr>
                <td>الجامعة</td>
                <td><input name="name" class="form-control" placeholder="الجامعة" /></td>
                <td>الكلية</td>
                <td><input name="name" class="form-control" placeholder="الكلية" /></td>
            </tr>
            <tr>
                <td>التخصص</td>
                <td><input name="name" class="form-control" placeholder="التخصص" /></td>
                <td>المستوى</td>
                <td><input name="name" class="form-control" placeholder="المستوى" /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td align="center" class="tr">
                    <button type="submit" class="btn btn-success btn-block" aria-label="Left Align">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  انضم  
                    </button>
                </td>
            </tr>
            
        </table>
        </div>

        </form>
    </div>
</div>
@stop