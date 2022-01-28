@extends('admin/layouts/app')
@section('content')
<div class="wrapper container-fluid">
    <div class="content-wrapper  table-margin">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="name">ชื่อ</label>
                <input type="text" class="form-control" id="name" name="name" value="ว่านหางจระเข้">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">สรรพคุณ</label>
                <textarea class="form-control" id="exampleFormControlTextarea1"
                    rows="3">ไม้ล้มลุกใบใหญ่หนาที่ทุกคนรู้จักกันดีแม้ถิ่นกำเนิดจะอยู่ไกลถึงฝั่งเมดิเตอร์ เรเนียน และแอฟริกาแต่ในประเทศไทยก็มีการปลูกว่านหางจระเข้อย่างแพร่หลายซึ่งในตำรับยาไทยก็ใช้ว่านหางจระเข้บำบัดอาการต่าง ๆ ได้มากมายจนเป็นที่รู้จักว่า เป็นพืชอัศจรรย์ที่มีสรรพคุณสารพัดประโยชน์ โดย “วุ้นในใบสด”สามารถนำมาบรรเทาอาการปวดศีรษะได้</textarea>
            </div>
            <div class="form-group">
                <label for="name">รูปภาพ</label>
                <br>
                <input type="file" id="img" name="filename">
            </div>
            <button type="submit" name="submit" class="btn btn-success">แก้ไข</button>

        </form>
    </div>
</div>


@endsection