import './bootstrap';

window.Echo.channel('broadcast-voucher')
    .listen('VoucherEvent', function(event){
        // console.log(event.type);

        alert(`Nhân ngày ${event.name} chúng tôi gửi bạn 1 voucher giảm ${event.type == 'percent' ? event.discount + '%' : '$' + event.discount} từ ngày ${event.starts_at} đến ngày ${event.expires_at}. Mã Voucher: ${event.code}` );
    })