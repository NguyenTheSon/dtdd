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
                <div id="help-main">
                    <h1>CHÍNH SÁCH ĐỔI TRẢ SẢN PHẨM TẠI THEGIOIDIDONG.COM</h1>

                    <p style="text-align: center;"><img alt="" src="https://cdn.tgdd.vn/Files/2013/07/30/519804/chinh-sach-doi-tra.jpg" /></p>

                    <p><em>Áp dụng từ: 01/03/2016</em></p>

                    <p style="line-height:20px"><strong>I. SẢN PHẨM MỚI: ĐIỆN THOẠI, MÁY TÍNH BẢNG, LAPTOP, SMARTWATCH</strong></p>

                    <table cellpadding="1" cellspacing="1" style="background: #FFCC99;
                           border: 1px;
                           border-radius: 5px;
                           margin: 5px 0 5px;
                           webkit-box-shadow: #ccc;
                           box-shadow: #ccc" width="100%">
                        <tbody>
                            <tr>
                                <td bgcolor="#FFCC99" colspan="2" height="32">
                                    <div style="line-height:30px; margin-left:5px; margin-right:5px; color:#000"><strong>Sản phẩm lỗi do nhà sản xuất:</strong></div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" bgcolor="#FFFFCC" height="32" width="51%"><strong style="color:#00">Tháng 1</strong></td>
                                <td align="center" bgcolor="#FFFFCC" width="49%">
                                    <p><strong style="color:#00">Tháng 2 - 12</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#FFFFCC" valign="top">
                                    <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                                        <p><strong>1 đổi 1 (cùng mẫu, cùng màu, cùng dung lượng...)</strong>. Trường hợp sản phẩm đổi hết hàng, khách hàng có thể đổi sang sản phẩm khác cùng nhóm hàng có giá trị lớn hơn 50% giá trị sản phẩm lỗi (hoàn tiền phần chênh lệch).</p>

                                        <p><strong>Hoặc:</strong><br />
                                            <em>Thegioididong.com</em> thu lại máy với giá bằng 80% giá trên hoá đơn hoặc theo giá bán hiện tại của sản phẩm đã qua sử dụng cùng model, cùng tháng bảo hành được niêm yết tại trang <a href="https://www.thegioididong.com/may-doi-tra" target="_blank" title="Máy đã qua sử dụng" type="Máy đã qua sử dụng">máy đã qua sử dụng</a>.</p>
                                    </div>

                                    <p> </p>
                                </td>
                                <td bgcolor="#FFFFCC" valign="top">
                                    <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                                        <p>Gửi máy bảo hành theo quy định của hãng.</p>

                                        <p><strong>Hoặc:</strong><br />
                                            <em>Thegioididong.com</em> mua lại máy, các tháng tiếp theo trừ thêm 5% so với tháng thứ 1 (80%). <strong>VD</strong>: tháng thứ 2 mua lại với giá 75% giá trên hoá đơn, tháng thứ 3 là 70%...</p>
                                    </div>

                                    <p> </p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#FFCC99" colspan="2" height="32">
                                    <div style="line-height:30px; margin-left:5px; margin-right:5px; color:#000"><strong>Sản phẩm không lỗi:</strong></div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" bgcolor="#FFFFCC" height="32" width="51%"><strong style="color:#00">Tháng 1</strong></td>
                                <td align="center" bgcolor="#FFFFCC" width="49%">
                                    <p><strong style="color:#00">Tháng 2 - 12</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#FFFFCC" height="32" valign="top" width="51%">
                                    <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                                        <p>Thu lại máy với giá bằng 80% giá trên hoá đơn hoặc theo giá bán hiện tại của sản phẩm đã qua sử dụng cùng model, cùng tháng bảo hành được niêm yết tại trang <a href="https://www.thegioididong.com/may-doi-tra" target="_blank" title="máy đã qua sử dụng." type="máy đã qua sử dụng.">máy đã qua sử dụng.</a></p>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFCC" valign="top" width="49%">
                                    <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                                        <p>Thu lại máy, các tháng tiếp theo trừ thêm 5% so với tháng thứ 1 (80%). <strong>VD</strong>: tháng thứ 2 mua lại với giá 75% giá trên hoá đơn, tháng thứ 3 là 70%...</p>
                                    </div>

                                    <p> </p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#FFCC99" colspan="2" height="32">
                                    <div style="line-height:30px; margin-left:5px; margin-right:5px; color:#000"><strong>Sản phẩm lỗi do người sử dụng:</strong></div>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#FFFFCC" colspan="2" height="32" valign="top">
                                    <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                                        <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                            <li>Không đủ điều kiện bảo hành theo qui định của hãng.</li>
                                            <li>Máy không giữ nguyên 100% hình dạng ban đầu.</li>
                                            <li>Màn hình bị trầy xước.</li>
                                        </ul>

                                        <p>=> <strong>Không áp dụng bảo hành, đổi trả. Thegioididong.com hỗ trợ chuyển bảo hành, khách hàng chịu chi phí sửa chữa. </strong></p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <tablet>
                        <p><strong>Điều kiện đổi trả:</strong></p>

                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                            <ul style="list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                <li>Còn đầy đủ hộp sản phẩm (mất hộp thu phí 2%).</li>
                                <li>Còn đầy đủ phiếu bảo hành (nếu có) và phụ kiện đi kèm (mất thu phí theo qui định và lớn nhất là 5% trên giá hoá đơn).</li>
                                <li>Quà khuyến mãi: thu phí theo giá mua lại do TGDĐ công bố khi bán sản phẩm. Nếu không công bố giá trị khuyến mãi thì sẽ thu phí không lớn hơn 5% giá trị cho mỗi món quà khuyến mãi .</li>
                            </ul>
                        </div>

                        <p><strong>Lưu ý: đối với sản phẩm mua trả góp:</strong></p>

                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                            <ul style="list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                <li>Trong 14 ngày đầu tiên: huỷ hợp đồng, không chịu phí.</li>
                                <li>Sau 14 ngày: quý khách phải thanh lý hợp đồng và chịu phí theo từng công ty trả góp</li>
                            </ul>
                        </div>

                        <p id="phu-kien"><strong>II. ĐỐI VỚI PHỤ KIỆN MỚI</strong></p>

                        <table style="background: #FFCC99;
                               border: 1px solid #ebebeb;
                               border-radius: 5px;
                               margin: 5px 0 5px;
                               webkit-box-shadow: #CCC;
                               box-shadow: #CCC" width="100%">
                            <tbody>
                                <tr style="margin-left:10px;">
                                    <td bgcolor="#FFFFCC" style="line-height:30px;" width="52%">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">Pin sạc dự phòng, Pin điện thoại, Thẻ nhớ, USB, Adapter - sạc, Tai nghe, Chuột, Loa vi tính, Miếng dán</div>
                                    </td>
                                    <td bgcolor="#FFFFCC" width="48%">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                                <li>Hoàn tiền trong vòng 1 tháng</li>
                                                <li>Bảo hành 1 năm 1 đổi 1</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFCC" height="48">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">Phụ Kiện có gắn nhãn "Chỉ bán online"</div>
                                    </td>
                                    <td bgcolor="#FFFFCC">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                                <li>Bảo hành 1 năm 1 đổi 1</li>
                                                <li>Không áp dụng đổi trả</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFCC" height="50">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">Miếng dán bảo vệ loại 90.000 VNĐ</div>

                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">Ốp lưng - bao da</div>
                                    </td>
                                    <td bgcolor="#FFFFCC">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px;">
                                                <li>Không bảo hành</li>
                                                <li>Không áp dụng đổi trả</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFCC" height="50">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">Tất cả các phụ kiện thương hiệu ECO</div>
                                    </td>
                                    <td bgcolor="#FFFFCC">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px;">
                                                <li>Bảo hành 6 tháng 1 đổi 1</li>
                                                <li>Không áp dụng đổi trả</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFCC" height="50">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">Phụ kiện chính hãng: SONY, LG, SAMSUNG, APPLE,...</div>
                                    </td>
                                    <td bgcolor="#FFFFCC">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px;">
                                                <li>Áp dụng chính sách bảo hành của hãng</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <p><strong>Điều kiện đổi trả:</strong></p>

                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                            <p>Nếu cảm thấy không hài lòng hoặc không có nhu cầu sử dụng sản phẩm, quý khách hàng có thể mang sản phẩm ra siêu thị để nhập trả và lấy lại 100% số tiền (sản phẩm không nhất thiết phải còn bao bì, hóa đơn).</p>
                        </div>

                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                            <p><strong>Lưu ý:</strong> Các trường hợp không áp dụng chính sách đổi trả.</p>
                        </div>

                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                <li>Khách mua 4 món phụ kiện giống nhau trở lên cùng 1 hóa đơn hoặc trị giá hóa đơn hơn 2 triệu đồng.</li>
                                <li>Khách hàng thanh toán bằng thẻ Visa với số tiền hơn 1 triệu đồng.</li>
                            </ul>
                        </div>

                        <p id="phu-kien-sony"><strong>III. ĐỐI VỚI PHỤ KIỆN SONY CHÍNH HÃNG</strong></p>

                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                <li>Khách hàng cần mang theo phiếu bảo hành, hóa đơn và phụ kiện đến <a href="https://www.thegioididong.com/bao-hanh/sony" target="_blank" title="TTBH SONY" type="TTBH SONY">TTBH SONY</a> khi có nhu cầu bảo hành.</li>
                                <li>Sản phẩm được bảo hành khi hư hỏng thỏa điều kiện bảo hành đã công bố trên <a href="https://www.sony.com.vn/section/warrantyinfo?cid=gwt:footer:c1:support:warrantyinfo" target="_blank" title="Chính sách bảo hành SONY" type="Chính sách bảo hành SONY">website của SONY Việt Nam</a></li>
                                <li>Không có sự phân biệt trong quy trình tiếp nhận giữa các sản phẩm có chính sách bảo hành là thay thế so với các sản phẩm được sửa chữa.</li>
                                <li>Thời gian bảo hành tùy thuộc vào sự có sẵn của phụ kiện thay thế, trung bình là khoảng 03 ngày.</li>
                            </ul>
                        </div>

                        <p id="apple"><strong>IV. ĐỐI VỚI PHỤ KIỆN APPLE CHÍNH HÃNG</strong></p>

                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                <li>Không bảo hành, đổi trả tại Thế Giới Di Động</li>
                                <li>Bảo hành sản phẩm Apple chính hãng sẽ do <a href="https://www.thegioididong.com/bao-hanh/apple" target="_blank" title="TTBH được Apple uỷ quyền tại Việt Nam " type="TTBH được Apple uỷ quyền tại Việt Nam ">TTBH được Apple uỷ quyền tại Việt Nam </a>quyết định.</li>
                                <li>Trung tâm bảo hành gợi ý: Nhà phân phối FPT HCM, SĐT : 08.39100068 - 1900585837</li>
                            </ul>
                        </div>

                        <p><strong>V. ĐỐI VỚI SẢN PHẨM ĐÃ QUA SỬ DỤNG: </strong>ĐIỆN THOẠI, MÁY TÍNH BẢNG, LAPTOP, SMARTWATCH</p>

                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                <li>Không đủ điều kiện bảo hành theo quy định của hãng.</li>
                                <li>Điện thoại, máy tính bảng, laptop,đồng hồ thông minh bị trầy xước màn hình.</li>
                                <li>Máy không giữ nguyên 100% hình dạng ban đầu.</li>
                                <li><strong>=> Khách hàng chịu chi phí sửa chữa.</strong></li>
                            </ul>
                        </div>

                        <table style="background: #FFCC99;
                               border: 1px solid #ebebeb;
                               border-radius: 5px;
                               margin: 5px 0 5px;
                               webkit-box-shadow: #CCC;
                               box-shadow: #CCC" width="100%">
                            <tbody>
                                <tr>
                                    <td bgcolor="#FFCC99" height="33" width="13%"> </td>
                                    <td align="center" bgcolor="#FFCC99" width="66%"><strong style="margin-left:5px">Lỗi do nhà sản xuất</strong></td>
                                    <td align="center" bgcolor="#FFCC99" width="21%"><strong style="margin-left:5px">Sản phẩm không lỗi</strong></td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#FFFFCC">Tháng 1</td>
                                    <td bgcolor="#FFFFCC" height="152">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                                <li>Đổi sản phẩm tương đương (cùng model, cùng dung lượng, cùng thời gian bảo hành, …).</li>
                                                <li>Nếu không có sản phẩm tương đương thì hoàn tiền 100%.</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td align="center" bgcolor="#FFFFCC" rowspan="2">Không đổi trả</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCFFFF">Tháng 2 - 12</td>
                                    <td bgcolor="#CCFFFF" height="70">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">Gửi máy bảo hành theo đúng qui định của hãng</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFCC99" colspan="3" height="32">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px; color:#000"><strong>Sản phẩm lỗi do người sử dụng:</strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFCC" colspan="3" valign="top">
                                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                                <li>Không đủ điều kiện bảo hành theo qui định của hãng.</li>
                                                <li>Máy không giữ nguyên 100% hình dạng ban đầu.</li>
                                                <li>Màn hình bị trầy xước.</li>
                                            </ul>

                                            <p>=> <strong>Không áp dụng bảo hành, đổi trả. Thegioididong.com hỗ trợ chuyển bảo hành tính phí. </strong></p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <p><br />
                            <strong>Điều kiện đổi trả:</strong></p>

                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                <li>Còn đầy đủ phiếu bảo hành (nếu có) và phụ kiện đi kèm (mất thu phí theo qui định và lớn nhất là 5% trên giá hoá đơn).</li>
                                <li>Ngoài ra, KHÔNG thu thêm bất kỳ phí nào khác.</li>
                            </ul>
                        </div>

                        <p><strong>VI. ĐỐI VỚI PHỤ KIỆN ĐÃ QUA SỬ DỤNG</strong>:</p>

                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                <li>Bảo hành 1 năm 1 đổi 1</li>
                                <li>Không áp dụng đổi trả</li>
                            </ul>
                        </div>

                        <p><strong>VII. THÔNG TIN THÊM:</strong></p>

                        <div style="line-height:30px; margin-left:5px; margin-right:5px;">
                            <ul style="line-height: 30px; list-style-image: url(https://cdn.tgdd.vn/Files/2016/03/02/795637/tick-icon.png); margin-left:20px">
                                <li>Từ ngày 1/6/2015 (tại TP.HCM) và từ 1/7/2015 (trên toàn quốc) Thegioididong triển khai sử dụng <a href="https://hddt.thegioididong.com/gioi-thieu" target="_blank" title="hóa đơn điện tử tại Thegioididong"><strong>hóa đơn điện tử</strong></a> thay cho hóa đơn giấy như trước đây.</li>
                                <li>Đối với khách hàng mua hàng từ thời gian này khách hàng <strong>không cần hóa đơn giấy và không bị trừ phí mất hóa đơn</strong> khi đổi trả sản phẩm.</li>
                                <li>Đối với các khách hàng mua hàng trước thời gian này, Khách hàng vẫn <strong>cần có hóa đơn khi đổi trả sản phẩm, nếu mất hóa đơn sẽ bị trừ phí theo quy định (10% giá trên hóa đơn).</strong></li>
                            </ul>
                        </div>
                </div>
            </section>
        </div>
    </div>
</section>
@endsection
