@extends('user.master1')
@section('title','Giới thiệu công ty')
@section('content')
<section id="columns">
    <div id="breadcrumb">
        <ol class="breadcrumb container">
        </ol>
    </div>
    <div class="container">
        <div class="row"> 
            <aside class="col-md-3">
                <div id="column-left" class="sidebar">
                    @include('user.block.danhmuc1')
                </div>
            </aside>
            <section class="col-md-9">
                <div class="right-area w775px left-fl pd10">

                    <ul class="breadcrumb">
                        <li><a href="{{URl('/')}}">Trang chủ</a></li>
                        <li class="active">About Us - Giới thiệu về T Mobile</li>
                    </ul>
                    <div class="banner-group wp100 clear">
                        <img class="banner-group" src="{{asset('image/cache/data/banner/2.jpg')}}" />
                    </div>

                    <div class="market">
                        <div class="info">
                            <p>Được thành lập từ năm 1996, chúng tôi là một trong những nhà phân phối ĐTDĐ đầu tiên tại Hà Nội và kể từ năm 2000, chúng tôi chính thức trở thành nhà phân phối ĐTDĐ SamSung &ndash; Masterdealer
                                duy nhất tại 194 đường Lê Duẩn. </p>

                            <p>Với bề dày gần 10 năm kinh nghiệm và uy tín đã tạo được trong những năm vừa qua, 
                                chúng tôi luôn đem lại cho khách hàng sự hài lòng và thỏa mãn với tất cả các sản phẩm của mình. </p>

                            <p>Bên cạnh đó là đội ngũ nhân viên nhiệt tình chu đáo và đầy kinh nghiệm của chúng tôi 
                                luôn đưa được ra cho khách hàng những thông tin có giá trị và giúp khách hàng lựa chọn được 
                                những sản phẩm phù hợp nhất. </p>

                            <p>Để nâng cao thương hiệu của mình, 
                                mục tiêu của chúng tôi trong thời gian tới là cung cấp đến tận tay khách hàng những sản phẩm chính hãng với chất lượng 
                                đảm bảo và uy tín cũng như giá cả hợp lý nhất. </p>

                            <p>Chúng tôi mong muốn sự đóng góp của khách hàng sẽ giúp chúng tôi ngày một phát triển 
                                để từ đó củng cố thêm lòng tin của khách hàng với chúng tôi. 
                                Chúng tôi rất biết ơn sự tin tưởng của khách hàng trong suốt gần 10 năm qua 
                                và chúng tôi luôn tâm niệm rằng cần phải cố gắng hơn nữa để xứng đáng với phương châm đề ra 
                                “Nếu những gì chúng tôi không có, nghĩa là bạn không cần” . </p>

                            <p>Chúng tôi xin chân thành cảm ơn tất cả các khách hàng đã, đang và sẽ ủng hộ chúng tôi. </p>
                            <p></p>
                        </div>

                        <h3>Danh sách chi nhánh của công ty:</h3>

                        <div class="market-item">
                            <p class="name">xxx cầu giấy - 0968.xx.xx.xx - 0968.xx.xx.xx.</p>
                            <p>Địa chỉ: xxx cầu giấy</p>
                            <p>Điện thoại liên hệ: 0968.xx.xx.xx</p>
                            <p>Giờ làm việc: 8h20 sáng đến 21h tất cả các ngày trong tuần</p>
                        </div>

                        <div class="market-item">
                            <p class="name">xxx cầu giấy - 0968.xx.xx.xx - 0968.xx.xx.xx.</p>
                            <p>Địa chỉ: xxx cầu giấy</p>
                            <p>Điện thoại liên hệ: 0968.xx.xx.xx</p>
                            <p>Giờ làm việc: 8h20 sáng đến 21h tất cả các ngày trong tuần</p>
                        </div>

                        <div class="market-item">
                            <p class="name">xxx cầu giấy - 0968.xx.xx.xx - 0968.xx.xx.xx.</p>
                            <p>Địa chỉ: xxx cầu giấy</p>
                            <p>Điện thoại liên hệ: 0968.xx.xx.xx</p>
                            <p>Giờ làm việc: 8h20 sáng đến 21h tất cả các ngày trong tuần</p>
                        </div>

                        <div class="market-item">
                            <p class="name">xxx cầu giấy - 0968.xx.xx.xx - 0968.xx.xx.xx.</p>
                            <p>Địa chỉ: xxx cầu giấy</p>
                            <p>Điện thoại liên hệ: 0968.xx.xx.xx</p>
                            <p>Giờ làm việc: 8h20 sáng đến 21h tất cả các ngày trong tuần</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
@endsection
