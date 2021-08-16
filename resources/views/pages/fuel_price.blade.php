@extends('layouts.app')

@section('title','FuelPrice Page')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center">

            <h2>ແຈ້ງການປັບລາຄານໍ້າມັນ</h2>

            <ol>

                <li><a href="#newest">ແຈ້ງການສະບັບຫຼ້າສຸດ</a></li>

                <li><a href="#past">ແຈ້ງການສະບັບຜ່ານມາ</a></li>

                <li><a href="http://laosoilprice.info/oilprice/" target="_blank" title="ເວັບໄຊ ຂອງ ລາຄານ້ຳມັນເຊີ້ອໄຟຢູ່ເຂດເທດສະບານແຂວງ, ນະຄອນຫຼວງວຽງຈັນ, ພະແນກຄຸ້ມຄອງລາຄາສິນຄ້າ ແລະ ຄ່າບໍລິການ (ຄພນ)">ເວັບໄຊລາຄານໍ້າມັນ</a></li>

            </ol>

        </div>

    </div>

</section>
<!-- End Breadcrumbs -->
<!-- ======= Portfolio Details Section ======= -->

<section id="portfolio-details" class="portfolio-details">

    <div class="container">

        <div class="portfolio-details-container">

            <div id="newest"></div>

            <h5>ແຈ້ງການສະບັບຫຼ້າສຸດ</h5>

            <p><a href="assets/doc/fuel_price-09032021.pdf" target="_blank">ແຈ້ງການລາຄານໍ້າມັນ ເລກທີ 0176/ອຄ.ກຄພນ, ວັນທີ 09/03/2021 (ເປັນ PDF)</a></p>

            <p align="center">

                <a href="assets/doc/fuel_price-09032021.pdf" target="_blank"><img src="assets/img/fuel_price-09032021.jpg" title="ແຈ້ງການລາຄານໍ້າມັນ ເລກທີ 0176/ອຄ.ກຄພນ, ວັນທີ 09/03/2021 (ເປັນ PDF)" width="80%"></a>

            </p>



            <div id="past" style="margin-bottom: 80px;"></div>

            <hr>

            <h5>ແຈ້ງການສະບັບຜ່ານມາ</h5>

            <ul>

                <li><a href="assets/doc/fuel_price-09032021.pdf" target="_blank">ແຈ້ງການລາຄານໍ້າມັນ ເລກທີ 0176/ອຄ.ກຄພນ, ວັນທີ 09/03/2021</a></li>

                <li><a href="assets/doc/fuel_price-19022021.pdf" target="_blank">ແຈ້ງການລາຄານໍ້າມັນ ເລກທີ 0119/ອຄ.ກຄພນ, ວັນທີ 19/02/2021</a></li>

                <li><a href="assets/doc/fuel_price-15102020.pdf" target="_blank">ແຈ້ງການລາຄານໍ້າມັນ ເລກທີ 0933/ອຄ.ກຄພນ, ວັນທີ 15/10/2020</a></li>

                <li><a href="assets/doc/fuel_price-17092020.pdf" target="_blank">ແຈ້ງການລາຄານໍ້າມັນ ເລກທີ 0850/ອຄ.ກຄພນ, ວັນທີ 17/09/2020</a></li>

                <li>ແຈ້ງການປັບລົງລາຄານໍ້າມັນ ຕາມແຈ້ງການເລກທີ 0850/ອຄ.ກຄພນ ລົງວັນທີ 18 ກັນຍາ 2020</li>

                <li>ແຈ້ງການປັບລາຄາຂາຍຍ່ອຍ ສະບັບເລກທີ 0808/ອຄ.ກຄພນ, ລົງວັນທີ 03 ກັນຍາ 2020</li>

                <li>ປັບລາຄານໍ້າມັນ ທີ 21 ສິງຫາ 2020</li>

                <li>ແຈ້ງການປັບລາຄານໍ້າມັນເຊື້ອໄຟ ສະບັບເລກທີ 0716/ອຄ.ກຄພນ, ລົງວັນທີ 04 ສິງຫາ 2020</li>
                <li>ແຈ້ງການປັບລາຄາຂາຍຍ່ອຍ ສະບັບເລກທີ 0677/ອຄ.ກຄພນ, ລົງວັນທີ 16 ກໍລະກົດ 2020</li>
                <li>ແຈ້ງການປັບຂຶ້ນລາຄາ ຕາມແຈ້ງການ 0619 ໃນຂອບເຂດທົ່ວປະເທດ</li>
                <li>ແຈ້ງການປັບລາຄານໍ້າມັນເຊື້ອໄຟ ສະບັບເລກທີ 0553/ອຄ.ກຄ</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Portfolio Details Section -->
@endsection