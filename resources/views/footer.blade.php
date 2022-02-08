<head><style>
    @font-face{
        font-family: 'EncodeSans';
        src:url('/fonts/EncodeSans.ttf');
    }
    *{
        font-family: 'EncodeSans',-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;
        text-decoration: none;
    }
    p{
        color: gray;
        margin: 0;
        line-height: 1;
    }
    a{
        color: gray;
        margin: 0;
        line-height: 1;

    }
    span{
        color: rgb(34, 34, 173);
        font-weight: 700;
    }
    h3{
        color: rgb(34, 34, 173);
        line-height: 1.5;
    }
</style></head>
<body style="color: #000;width:fit-content;height:fit-content;padding:0 0 0 20px;display:flex;flex-direction:row;">
    <div style="width: 350px">
        <a href="http://mag.pl"><img src="{{url('/images/mag_logo.png')}}" width="200px"/></a>
        <div style="display: flex;flex-direction:column;margin-left:20px">
            <h3 style="margin-bottom:0">{{$employee->name}}</h3>
            <p>{{$employee->position}}</p>
            <p>&#9679; {{$employee->department}}</p>
        </div>
        <div style="display: flex;flex-direction:column;margin:10px 0 0 20px">
            <p><span>MOB:</span> {{$employee->mobile}}</p>
            <a href='mailto:{{$employee->email}}'><span>MAIL:</span> {{$employee->email}}</a>
        </div>
        <div style="display: flex;flex-direction:column;margin:10px 0 0 20px">
            <p>{{$company->company}}</p>
            <p><span>UL: </span>{{$company->address}}, {{$company->post_code}}</p>
            <p><span>TEL: </span>{{$company->phone}}, <span>FAX: </span>{{$company->fax}}</p>
        </div>
        <div>
            <hr/>
            <p style="font-size:0.75rem;margin-left:20px;">{{$company->vat_no}}</p>
        </div>
    </div>
    <div style="display: flex;flex-direction:column;text-align:center;">
        <img src="{{url('/images/ship-01.svg')}}" width="400px" height="375px">
        <a href="https://{{$company->www}}" target="_blank" style="color: rgb(34, 34, 173);">{{$company->www}}</a>    
    </div>
</body>