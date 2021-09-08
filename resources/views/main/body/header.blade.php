<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div class="logo mr-auto">
            <a href="{{route('homeIndex')}}"><img src="{{asset('frontend/assets/img/logo.png')}}" title="ກົມການຄ້າພາຍໃນ ກະຊວງອຸດສາຫະກໍາ ແລະ ການຄ້າ" alt="Department of Internal Trade" class="img-fluid"></a>ກົມການຄ້າພາຍໃນ
        </div>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="">ໜ້າທໍາອິດ</a></li>
                <li class="drop-down">
                    <a href="#">ກ່ຽວກັບພວກເຮົາ</a>
                    <ul>
                        <li><a href="{{url('historypage')}}">ປະຫວັດຄວາມເປັນມາ</a></li>
                        <li><a href="{{url('structurepage')}}">ໂຄງຮ່າງການຈັດຕັ້ງ</a></li>
                        <!--                            <li><a href="human.html">ບຸກຄະລາກອນ</a></li> -->
                        <li><a href="{{url('rolepage')}}">ພາລະບົດບາດ</a></li>
                        <!--                            <li><a href="unit.html">ໜ່ວຍງານໃນສັງກັດ</a></li> -->
                        <li><a href="{{url('whiteReportpage')}}">ບົດລາຍງານປະຈຳປີ</a></li>
                        <li><a href="{{url('Strategypage')}}">ແຜນຍຸດທະສາດ ແລະ ວິໄສທັດ</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="#">ຂ່າວ/ປະກາດຂອງກົມ</a>
                    <ul>
                        <li><a href="{{url('FuelPricepage')}}">ແຈ້ງການປັບລາຄານໍ້າມັນ</a></li>
                        <li><a href="{{url('Newspage')}}">ຂ່າວປະຊາສຳພັນ</a></li>
                        <li><a href="{{url('activitypage')}}">ຮູບພາບກິດຈະກຳ</a></li>
                    </ul>
                </li>
                <li><a href="{{url('Statisticpage')}}">ຂໍ້ມູນສະຖິຕິ/ບົດຄົ້ນຄວ້າ</a></li>
                <li class="drop-down"><a href="#">ນິຕິກຳຂອງກົມ</a>
                    <ul>
                        <li><a href="{{url('Legislationpage')}}">ກົດໝາຍ ແລະ ດຳລັດ</a></li>
                        <li><a href="{{url('Orderpage')}}">ຄຳສັ່ງ ແລະ ຂໍ້ຕົກລົງ</a></li>
                        <li><a href="{{url('Noticepage')}}">ບົດແນະນຳ ແລະ ແຈ້ງການ</a></li>
                        <li><a href="https://law.moic.gov.la/lo/" target="_blank">ຖານຂໍ້ມູນນິຕິກຳ ອຄ</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="{{url('contactpage')}}">ຕິດຕໍ່ພວກເຮົາ</a>
                </li>
            </ul>
        </nav>
        <!-- .nav-menu -->
    </div>
</header>
<!-- End Header -->
