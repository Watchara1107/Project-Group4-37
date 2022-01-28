@extends('layouts.app')
@section('content')
    {{-- Home --}}
    <span class="anchor" id="home"></span>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @if ($background->isempty())
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{ asset('admin/images/backgrounds/default.jpg') }}" class="img-top selector">
                </div>
            @else
                @foreach ($background as $background)
                    @if ($loop->first)
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="{{ asset('admin/images/backgrounds/' . $background->image) }}"
                                class="img-top selector">
                        </div>
                    @else
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src=" {{ asset('admin/images/backgrounds/' . $background->image) }}"
                                class="img-top selector">
                        </div>
                    @endif

                @endforeach
            @endif

        </div>
    </div>
    <div class="bg-header-text fixed-text">
        <p class="text-center home-font text-white h-text"><b>คลินิกทางเลือกสมุนไพรเพื่อสุขภาพ</b></p>
        <p class="text-center home-font text-white h-text"><b>Traditional Alternative Medicine Clinic</b>
        </p>
    </div>

    <section class="container">

        <br>

        <div class=" row justify-content-between  align-items-center">
            <div class="col-md  text-center ">
                <img src="{{ asset('img/home-1.jpg') }}" class="img-border">
            </div>
            <div class="col-md text-center ">
                <span class="home-font">ทางเลือกในการรักษาสุขภาพ</span>
                <br>
                <a href="#herb" class="btn btn-primary btn-text">ศึกษาเพิ่มเติม</a>
            </div>
        </div>
        <br>
        <div class=" row justify-content-between  align-items-center d-flex ">

            <nav id="n1">
                <div class=" row justify-content-between  align-items-center">
                    <div class="col-md text-center ">
                        <span class="home-font">สรรพคุณของสมุนไพร</span> <br>
                        <a href="#herbs" class="btn btn-primary btn-text">ตัวอย่างสมุนไพร</a>

                    </div>
                    <div class="col-md  text-center">
                        <img src="{{ asset('img/home-2.jpg') }}" class="img-border">
                    </div>

                </div>
            </nav>
            <nav id="n2">
                <div class=" row justify-content-between  align-items-center">
                    <div class="col-md  text-center">
                        <img src="{{ asset('img/home-2.jpg') }}" class="img-border">
                    </div>
                    <div class="col-md text-center ">
                        <span class="home-font">สรรพคุณของสมุนไพร</span>
                        <br>
                        <a class="btn btn-primary btn-text">ตัวอย่างสมุนไพร</a>
                    </div>
                </div>
            </nav>
        </div>
        <br>
        <div class=" row justify-content-between  align-items-center">
            <div class="col-md  text-center">
                <img src="{{ asset('img/home-3.png') }}" class="img-border">
            </div>
            <div class="col-md text-center ">
                <span class="home-font ">ปรึกษาแพทย์</span>
                <br>
                <a href="#contact" class="btn btn-primary btn-text">ติดต่อ</a>
            </div>
        </div>
    </section>
    <section id="herb" class="home-section container">
        <div class=" row justify-content-between ">
            <div class="col-md ">
                <span class="home-font  text-center">สมุนไพร</span>
                <br>
                <p class="text-p text-justify">
                    คำว่า “สมุนไพร” หมายความว่า ยาที่ได้มาจากพืช สัตว์
                    แร่ธาตุจากธรรมชาติที่ไม่มีการเปลี่ยนแปลงสภาพโครงสร้างภายใน
                    สามารถนำมาใช้เป็นยารักษาโรคต่างๆ และบำรุงร่างกายได้ ประเภทของสมุนไพร
                    สมุนไพรที่ได้จากส่วนของพืชโดยตรง <br>(พืชวัตถุ) โดยส่วนต่างๆ ที่นำมานั้นมีสารที่สามารถใช้เป็นยาได้
                    ได้แก่ ใบ ดอก ผล เปลือกผล เมล็ด เป็นต้น
                    สมุนไพรที่ได้จากอวัยวะของสัตว์ (สัตว์วัตถุ) ได้แก่ ตับ ดี นอ เขา เอ็น เลือด น้ำมัน มูล ฯลฯ เช่น
                    ขี้ผึ้ง
                    รังนก
                    น้ำมันตับปลา สมุนไพรที่ได้จากแร่โดยธรรมชาติหรือสิ่งที่ประกอบขึ้นจากแร่ธาตุต่างๆ ตามกรรมวิธี
                    (ธาตุวัตถุ) นำมาใช้เป็นยา เช่น เกลือ กำมะถัน น้ำประสานทอง ดีเกลือ สารส้ม
                    การจำแนกรูปแบบของสมุนไพรที่ใช้เป็นยา<br><br>

                    1. รูปแบบที่เป็นของเหลว ยาเหล่านี้มักได้จากกรรมวิธีต่างๆ กันเช่น ยาต้มคือหั่นต้นยาแล้วต้มกับน้ำ
                    ยาชงเป็นยาแห้งหั่นเป็นชิ้นเล็กๆ คั่วแล้วนำไปชงกับน้ำ เป็นต้น<br><br>

                    2. รูปแบบที่เป็นของแข็ง ยาปั้นลูกกลอน เตรียมโดยหั่นต้นไม้ยาสดให้เป็นแว่นบางๆ ตากแดดให้แห้ง บดเป็นผง
                    ผสมกับน้ำผึ้งหรือน้ำเชื่อม 1 ส่วน
                    ปั้นเป็นลูกกลมๆ เล็กๆ ขนาดเส้นผ่าศูนย์กลาง 1 เซนติเมตร ปั้นเสร็จผึ่งแดดจนแห้ง<br><br>

                    3. รูปแบบที่กึ่งแข็งกึ่งเหลว สมุนไพรเหล่านี้จะทำให้อยู่ในลักษณะพอทรงตัวได้ มักใช้เพื่อการรักษาภายนอก
                    เช่น
                    ยาพอก เตรียมโดยใช้ต้นสดตำให้แหลกหรือเหลว<br><br>

                    4. รูปแบบอื่นๆ ที่มีลักษณะการใช้พิเศษ เช่นใช้วิธีรมควัน เพื่อรักษาโรคของทางเดินหายใจ
                    หรือการรมควันเพื่อรักษาแผล และให้มดลูกเข้าอู่ในสตรีภายหลังคลอด
                </p>
            </div>
        </div>
    </section>
    <section class="home-section container">
        <span class="anchor" id="herbs"></span>

        <h2 class="text-center home-font">ตัวอย่างสมุนไพร</h2>
        <br>
        @if ($herb->count() > 3)
            @for ($i = 0; $i < 3; $i++)
                <div class=" row justify-content-between  align-items-center">
                    <div class="col-md  text-center">
                        <img src="{{ asset('admin/images/herbs/' . $herb[$i]->image) }}"
                            style="width:200px;height:200px;">
                    </div>
                    <div class="col-md ">
                        <span class="home-font ">{{ $herb[$i]->name }}</span><br>

                        <span class="text-p">{{ $herb[$i]->description }}</span>
                    </div>

                </div>
                <br>

            @endfor
        @else
            <div class=" row justify-content-between  align-items-center">
                <div class="col-md  text-center">
                    <img src="{{ asset('img/home-aloe.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col-md ">
                    <span class="home-font ">ว่านหางจระเข้</span><br>

                    <span class="text-p">ไม้ล้มลุกใบใหญ่หนาที่ทุกคนรู้จักกันดี
                        แม้ถิ่นกำเนิดจะอยู่ไกลถึงฝั่งเมดิเตอร์ เรเนียน และแอฟริกา
                        แต่ในประเทศไทยก็มีการปลูกว่านหางจระเข้อย่างแพร่หลาย
                        ซึ่งในตำรับยาไทยก็ใช้ว่านหางจระเข้บำบัดอาการต่าง ๆ ได้มากมาย
                        จนเป็นที่รู้จักว่า เป็นพืชอัศจรรย์ที่มีสรรพคุณสารพัดประโยชน์ โดย “วุ้นในใบสด”
                        สามารถนำมาบรรเทาอาการปวดศีรษะได้</span>
                </div>

            </div>
            <br>
            <div class=" row justify-content-between  align-items-center">
                <div class="col-md  text-center">
                    <img src="{{ asset('img/herbs/Turmeric.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col-md ">
                    <span class="home-font ">ขมิ้นชัน</span><br>

                    <span class="text-p">เรียกกันทั่วไปว่า “ขมิ้น” เป็นไม้ล้มลุกมีสีเหลืองอมส้ม
                        มีเหง้าอยู่ใต้ดิน มีกลิ่นหอม คนนิยมนำ “เหง้า”
                        ทั้งสดและแห้งมาใช้รักษาอาการที่เกี่ยวกับกระเพาะอาหาร
                        รวมทั้งแก้ท้องเสีย ท้องร่วง จุกเสียดแน่นท้อง และสามารถนำขมิ้นชันมาทาภายนอก
                        เพื่อใช้รักษาแผลเรื้อรัง แผลสด โรคผิวหนัง พุพอง รักษาชันนะตุ</span>
                </div>

            </div>
            <br>
            <div class=" row justify-content-between  align-items-center">
                <div class="col-md  text-center">
                    <img src="{{ asset('img/herbs/Thong_Panchang.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col-md ">
                    <span class="home-font ">ทองพันชั่ง</span><br>

                    <span class="text-p">เป็นสมุนไพรที่มีคุณค่าไม่ต่างไปจากชื่อ “ทองพันชั่ง”
                        หลายพื้นที่อาจเรียกว่า “ทองคันชั่ง” หรือ “หญ้ามันไก่” เป็นไม้พุ่มขนาดเล็ก
                        ออกดอกสีขาว ส่วนที่ใช้ทำยาคือ ใบและราก ที่หากนำปริมาณ 1 กำมือมาต้มรับประทานเช้าเย็น
                        จะช่วยดับพิษไข้ รักษาโรคผิวหนัง ริดสีดวงทวารหนัก แก้ไอเป็นเลือด ฆ่า</span>
                </div>

            </div>
            <br>
        @endif



        <div class=" text-center">
            <a href="/herbs" class="btn btn-primary btn-text mt-5">ข้อมูลเพิ่มเติม</a>
        </div>
    </section>


    {{-- Contat --}}
    <section class="home-section container " id="contact">
        <h2 class="home-font text-center ">ที่อยู่ของร้าน</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15498.312003618857!2d100.20983352733828!3d13.804294283013252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2edf19ebc5dc5%3A0x4a3ac17d60b31f85!2z4Lir4Lih4Lit4Lit4LiZ4Lix4LiZ4LiV4LmM4LmB4Lie4LiX4Lii4LmM4LmB4Lic4LiZ4LmE4LiX4Lii!5e0!3m2!1sen!2sth!4v1628045129580!5m2!1sen!2sth"
            width=100% height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="row col-md-12">
            <div class=" row justify-content-between ">
                <p>
                    <img class="selector"
                        src="data:image/png;base64,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" />
                    <a href="https://goo.gl/maps/mBrMxcXmc52yvQXdA" class="home-contact-text align-middle">ซอย 6 ตำบล
                        งิ้วราย
                        อำเภอนครชัยศรี
                        นครปฐม 73120</a>
                </p>
            </div>
        </div>
        <div class="row col-md-12">
            <div class=" row justify-content-between ">
                <p>
                    <img class="selector"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAJ10lEQVRoge2Za3RU1RXH//s+8w4TkoCBCIE85CUENRhAC0ZEUSjV+lqrlQTUah4IRPHRtbqy2i4tkpAKRKViQqguFVlWKmpFQAsWKAgBRCAiGCCQhBACyUxm5j7O7odAMjATiJqkX/h9m3vOPvf/n33OuefuC1zlYoqfLB1UnFOe3lP3U7pysOKc0tE20ToiPgDglq4cuyOkrhpoUV55miDaQIDTBjK7atwr0akMLMh7o7/K6mRmjgYAWZGa+14bvv6h/Hu/u9CHIV4A0MBsZ8xf+ujRbtLrB12ucXHeYt3i8AUMZANQfdsURXZ7hT1y/uKsQwCwYP6b4e5TklmwIstz6TiFeaVDyUZz/qszj3epelwmA6vuXyUfE673iXB38hD1aKRDStixxYvpmdcjLFLHu6/t0hWL/gjgYQB49uVZzb7xi+auCobhfEAQfkdM6ZDoLQC/7WoDHa6B431dLxNh6i0ZwfYd00ISUsfo0DTC7q3HTEd0CFLT+0kA7i/KLo2/NLYwt3Qum64TTLSCQJEgekolJaerxQMdZGBRXnkas5g7bJRujbxRUwFA0wgpwzR8u/uc4mzyYvhNcfh603GJiJ4A8HvfeAIlgPEJg/72dEnmpu4Q3n6vABTllG5UNRqTlRsRomntXRrqbbxT6kTahGsxJiMBa9/+xq6qPHNGQXP87CWzvd0ptCP8plBhbtl1IJp4w9gg+IoHgN4xMuL6K9i3/aRt24wRaf1kZsRYHH5fjym+BD8DioypAJCUIocEChieqqGlxZKP7K/HgMQohPfSPUz0ZHcL7Qi/NUAyJkWGMSKCjUDNGJyiIHgjYe9/j3PSiFgaeXP/oK/+dXj8wifLr3/mtRl7AaAoZ0UGiD8BoAEAgaqboqsSCgoKrK424JcBtjg6LFSADXfAAFkmDL1ex8mjTmqoc2HoDX0hyZJJsmjLApvePQBeBGEBCAsE8KfuEA8EWMTFT604NCDeSrxzsgkptBdI1f2CmpsEVi5rxvAbr8GEqclYt/qgp3J3nUlaaJ95xQ8Edt5N+GWAANMSrb7Y4woYFB4hYcAgFZUVdWx4bfQbGBkEQrgwmmK7V64/fgZkGfUu53kDtgk2A++OI0ZpMExB+3acQMWWagQFK2edMdVdflS4En4GLEtsazxLMIxWE8LdDDD7BV47SEFEpIQt66r4bL3bNlrElIKCAtH9ki/Gz4BtSx+zAH6oOt8kbAiP0y+QCIiKkcHMBBJz5pbM2NrtagPgZyC/ZMZmXaezhw7JbdfY2wKYxkX99u81UPW9CYAK5y2ZubTblXZAgEVMLKv0VvVJCeea2jcp230OzO0z5Mh3JmQZDfF1Ic/1jNTABDyNNjmtlyTA3rHD50EmBLjlXNtPR28ZwqaoE7HutG5XeRkCGnh26ayTwWFU9v1hGadPt3dh0wB7W7f50WM0BAUTJJXLCwpWaT0j158O3wdcbutZRSX3l/9WIHw2oZoqJ95+oxmmCYy7LYgsi5N6nWtZ2BNiA9GhgXnFj56RCY/Vn5awq6J9KoWFMVpcNtavbUHKMBVJQ1TYlphdlLtiWo8ovoTLViVyijLfjoySvtq5U0HdqdauoaGMW8abqDlpw9VkY+KdwXBEySCJVxVnl43qEdU+XLGsUl+vTNM0cq7foMI4v5MmJQrMyvIgRHFCU4F7fh2KIF3SoNJni7KXJ3a3aF8uW5W4wJI5b0ywbHVjQoJFd9xutkW53cD6L4KQPjEMAPDhuy5hGaixJJ54oVrRWYrnlA20LAzUSd01e8lvmjob16nCVt5fH/syNFz6y+EjMnb6rAdZJjQ3Mda85wQR8MsHQyRZRYzMtKUw+83xnRVRmFv2HFt0RAK+sGDVFuWUvlKYs3xAZ2I7lQEAYDC9/vzKT91OMXnyJBMJCTYAwOkkrPlIg9cgTH8wDLJCWP13Z71hcAQYz80ryXyFQP6HqfMU5ZRNAWHt4KHRTSPT+0UeqDjFB3fXMjMEgd+BoAXzSjK//dkGgNZaT5DirjBNkTLlLgP94sRFJtxuwu13B6NfvGr9c7Wr/lSNfQ0IG2RJ5Mx5ZValn/js0niSqYIZUZPuTUHKqD5ERHCe8+LrTcfEtztrhbCFREwfsGT/OX/JrD0/ywAAFD6+LDo4Qt8jBMdNu8eLmJjWP9flInz2uYa6U4S0sTrSxgbhmz0Gtmz02KYNJuYSWNLCea/POAEAyx5fprqC1M2yJN0QFkHS2TNCiojUm8feOTgscVg0ERFanAYqtlTbe7adsG1TqADWgESBr5EfbQBorZUGq2oFgaPvnmKgb5/WTNg2sHmzigOVMuIHypgwOQSaBmzb5MWBvSaDWUDCuyzwCRHuF+Dpd00PxaAkFYcOmNix1cONpwVFOHT32EmDghOHx4CI4HFb2Lut2ti1+bgwTSGBaUp+SeYGAJAvq7QD1m//qClj9D2rVFV+qLJSDouJZURGMCQJGDhQICyUcfAA4ZtdBhRVws236hg6UiMGSWfqxAhb4D6SkDz+tmAaMkIDUWvJZkSqTo4oGTXVhrrv63pU7qn1hoRpSmxcGPonOOThaXHK/p21RAB9uu0fH/7kDFzg5eyyviFB+I9pYtC4cSaGD7Pb2lpaCFu3KvjusIxBiQqm3BsKALAsoLFBIKIXQdcD354ZrRnZ4kFjg0Cv3rqRnjFYGzw8GssXbHV5nOb7+SVZWT/bAAAsznsrQtKtj7wevnXIdTbGjTOh+hxia2oIAgrik8NBstrxQJ0w4ojWzbOnDYnBL+YvzfoD8BOnkC+fbv/Am3bHqJWRtiOiro7Sj/wgo08sIzS0dXGHhwMR4efLNEKAFLX1da4T+EwtOKJknDhqyB4PS0y8dN32NfuBLsiAL0U5KzIUhd+xBWKGDbOQdqMF3a8qI4GCgiHpIQD9uA9E6z92Vx/cZ8TpLMXmlsxoALogA76s2/HhD78Y/cByhSzHqXo5df8BBUKAonsz5LY7MWCZYMMNEgKQZJB0ZSNnGmx8+bknCIy1c0oyyy5c79IM+FKUV54qS3aRbdNETQUnJduUkmShTx//hzLJCqCFQNJ1BDrd1J6w8fEHLXC7RSMLO/XpkvZPWN1m4AKF2WU3KSpeYBtTBSA7HAIpyQLJSXbbOml3QiBFa60GKjpMi7Brmxe7txssKTjnNcS4p5fM3H9RSHcbuMDCJ1bGKpp4RJJFrmXSACIgurdAXBwj7hoBR5SArjIsATQ2Sqg6KuH7Q4rt8UICsNoWmD3/1azaS8ftMQO+FOWVp4KsX6kyPWyaNDiQDllmEd2bj0Y66PmpeTPf62is/4sBX4rnlPVim9LAnMiMcCZqlAQfs0Pkzc8UPhK4OHuVq1yljf8BJUT9MFSP9awAAAAASUVORK5CYII=" />
                    <span class="home-contact-text align-middle">0852668855</span>

                </p>
            </div>
        </div>
        <div class="row col-md-12 ">
            <div class=" row justify-content-between ">
                <p>
                    <img class="selector"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAExUlEQVRoge2ZS0wTeRzHP9NOYQGtFEiQTdyuu8RIwppGgpLwWPdgjAejRkPgpBETN3owXknQBB8EojEKstEoB9SLYkgIFzWi+IqJiq9FuwSN8pCHFWmFUmhnugeVOCkzzAxVL/3c5v97fX/9z8z/P/9CjBgxYvxIBF1etylEZhcChUA6YP1GeiRgELiFwAkKuD1bgHYD1xGxUovA31ESaJR6QuzmL0JqDqJm+I8VD7Dzs8Jdag7qM9BOERbao6/JBGEKKOLOTCaLapBFvevvjqCuResWKjBbzybYSLOlkWZLA8AT9OAJegiGg2ZTFqkZtBpIN1Ihd14um9M2s2rBKpbPW44oKFOHwiE6xjq44b1Bk6eJ+2P3jaRfqGZQfwZuEdaTeY1jDRWLKsi35xsRxB3fHSp7KrkyekVfQOHMWk03YLfaOfrbUbalb9MnQIWGoQb2vNqDT/JpO0azAYfo4HL2ZXLn5eqUqc3j8ces/nc1nqBH3UmlAfW3kAoJlgTa/miLmngAV5KLq9lXSbAkGI413MChXw/hSnIZLjQbriQXB50HDccZuoWWJiylM6cTi/G+dSEjk92RzQv/i0hjNG6hsoVlCvHuCTeVPZUKn5ODJ2n3tvNk/Al73+wl/Pl3uOu7S91AHaOhUbZ0baHYXUyxu5hzw+e+EmOhLL3MiCRjDWxI3aC4bhtto6a/RjF2avAUze+buTZ6jf29+znSfwSAlpEW6gfqeeZ/RuNwI2PSGPBpfdCqMRvam7mvsApWnPFOQ8kByl+XU2SPXEgPOA+w+KfF2K12xbgz3okoiBGNqaF7BpKtydgEm173TzFiMmsdayn9rxRvyKuw5TzOIeVeCju6dyjGRUEkRUzRXUP3DHwIfWAqPEWcEKc7uYBAw5IGXI9cnBk6Q2ZC5rSt9vda0m3p5M3PU8RIYYmR0IjuGrpnQEama6IrYjwoB6nuq6amr4aXgZcR9lQxlfNLziMjK8Z7Jnt4FXhF/1S/YrzT36n79gEDMwBwyXOJ7F+yp6+zErNwiA6q+6qxYCEjLoOV81fiSnKREZdBob0QgKIFRRxefJhHY49wxjtxxjs5PXgaAJ/kU8xC8/tmI5KMrQOL4hfhznGTaEk0VEQvPslH5oNM3gXfRRqjsQ70TvZS1VtlTp0OKt5UzCxeA8NLalVfFS0jLUbDZuWC5wLH3x43HGe4ASksUeoupXWk1XAxNdpG29jatdVUrKlNjV/2s/75evb17GNSnjRV+AutI62se76OCXnCVLzpXZmMTGVPJVkdWZwdPktADhjOceztMTa+2Ihf9puVMfdPyi8ki8lsSt1Egb2AFfNXkJWYhaCS3hvysr17O02eJv0Fov1JORvLkpbxwPUgYvvxcOwhJe4SugPdxhJG64tML0/Hn/JR+jh9HZADlL8uJ+9JnnHxGmitxBJzOMR1iI7pTdl173V2du/EPeE2m05SM2g1MAT8bLZinBDHRc9FGocbo/HKHVAzaDVwEygxW3EoOESxu9hsuJKw+hmt+jMgcAzm9iBHkX/UDOoNFHBPK/C7EaZO7WQaZnsLhdgN1Edbk27C1CGxR8tF319MN8n/fMRdCGTwbf9iGgBuInOCP7n7jerEiBEjRpT4H/jYi+nhW4IWAAAAAElFTkSuQmCC" />
                    <a class="home-contact-text align-middle" href="http://line.me/ti/p/td0D3ANFBa">เพิ่มเพื่อนไลน์</a>

                </p>
            </div>
        </div>
        <div class="row col-md-12">
            <div class=" row justify-content-between ">
                <p>
                    <img class="selector"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADq0lEQVRoge2WXWgUVxiG3zOzk01tEhNIjInGFKNLwARpd91sViql1htvNBL0qhdCsVeJPwh6ZSQqURRRc1EIhQaEQkspWgqKhaISY6i7CaLSGiTU0l2jROJGjbvz9/VCIjPjbHb+khSd5+6cM9857zfnPed8gI+Pj4/P+wwzdiRCococz3czoq0AFgO4w4hOt96//+N8CpOvNW0nsH0gNAPIMMLPvCJ1sS/+eqr9TpdAIhSqFDluEMBqkzl/KhLFryJjY5k51A36LbxYFsRvAbSbDI8GZCmuTYLTjuZ4vhvm4gGgXQwGk0ONjWHv5OoRf28OK4KYhLl4AAgpgnBY26FLgBG1zboCUYMK3EjFoh2ulJqQikU7GIcbBDTMLgHbtO2AYbzawlpBMDqXao1ulPminfUDA5N2xWp52tJSluXVPhDtsBhSo21whsG3DnV+aEtAEUf+Xd8Ssx6jJx0Lf5LlKAmCVfGAQaMxAZtQPaeq11Px6AGylTyQjq/bRYwbBGiVGwVGC9mGAAFEx9Ot0daHFiw1Yxmy99fzotuBZF3stvOpClvKoWV0jEiLEtq2LoGTG4+tPfV5t5wLBHPOps9vKbeWkYllz0wvyXS/qIlo+3WLrDieIgCofPEYe64eUVdN/Gl6RuorSi0syS7KfNHOEklSXt8yhf/6kp6saf8/spDreVkTHFcFAMCvbRfe6DYVOFFSja7NZ7lfmrYTALKg1gTawiu5xCtOHXFjmSu5Mux/XvdGvJG8h1jheHwf+ZqNVjVR5/Wj2SJFLLa7OANW2o2ZQSRO6p2uEgbEklm/K3iNJurXs31t/cVPSmvHnYqxy7gamNw9tbygeMDiOzBRUo29bf1LrzVsGoVjS1njD/HDvzszKyryWcaI5YdM4Xh88+nBUH+s4y4DPK9IGZDpm6q61/Ny6UeSjTfR9kt8uXFrM5i8FoQhu7GzMKxAiVxSytbYDXRUStQOjjx8JKkbQDgBl5YioG+6fDJed3P4gZN4x6VEJJmUABxMxSM3Qew7ABU2p5gCYdfyoVs/ONUAuC7mgGWDiYuMyR/btNSwCiW8zKV4wIMEAHuWcmsZI66r0RksWMoTyxjxZAe05LGUZ5Yx4nkCwGtLTVdMfgZGvWDU66VljHhmISOrLz3IAeicq/lnmJMdmE/8BBaady6B9IKosAOxlLapT4Dh/LyKcQKn6jTqrtHSV88OPf+gHCB8CaB2XoUVJs2InS+WhK6FFuLj4+Pj8//hP6t7cYwGuNS3AAAAAElFTkSuQmCC" />
                    <span class="home-contact-text align-middle">ananta60herb@gmail.com</span>

                </p>
            </div>
        </div>
    </section>

    <section id="creator" class="home-section container  text-center mg-bot">
        <h2 class="home-font">ผู้จัดทำ</h2>
        <br>
        <div class="row">
            <div class="col-md-3 text-center ">

                <img src="{{ asset('img/sakchan-bg.png') }}" class="img-creator">
                <br>
                <span class=" creator-text">นายศักดิ์ชาญ มีไชย </span>
                <br>
                <span class="creator-text">Back-End</span>
            </div>
            <div class="col-md-3 text-center ">

                <img src="{{ asset('img/phat-bg.png') }}" class="img-creator">
                <br>
                <span class=" creator-text">นายณพัทร โทวราภา </span>
                <br>
                <span class="creator-text">Front-End</span>

            </div>
            <div class="col-md-3 text-center">

                <img src="{{ asset('img/oishi-bg.png') }}" class="img-creator">
                <br>
                <span class=" creator-text">นายศรัณย์ภัทร์ เปิดชั้น </span>
                <br>
                <span class="creator-text">Tester</span>

            </div>
            <div class="col-md-3 text-center ">

                <img src="{{ asset('img/pud-bg.png') }}" class="img-creator">
                <br>
                <span class="creator-text">นายกมลวิช สาระคุณ</span>
                <br>
                <span class="creator-text">Tester</span>

            </div>
    </section>

@endsection
