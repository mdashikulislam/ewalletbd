@if(session('success'))
    <div class="alert alert-success" style="margin-top: 20px;background: #ff4b00;color: #fff;font-weight:bold;border-color: #ff4b00;">
        {{session('success')}}
    </div>
@endif
