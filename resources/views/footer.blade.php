<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body style="color: #000; width: fit-content;padding:20px;">
    <div><a href="http://mag.pl"><img src="{{url('/images/mag_logo.png')}}" width="200px"/></a></div>
    <div style="display: flex;flex-direction:column;margin-left:20px">
        <h3 style="margin-bottom:0">{{$employee->name}}</h3>
        <p>{{$employee->position}}</p>
        <p>&#9679; {{$employee->department}}</p>
    </div>
    <div style="display: flex;flex-direction:column;margin:10px 0 0 20px">
        <p><span>MOB:</span> {{$employee->mobile}}</p>
        <a href='mailto:{{$employee->email}}'><span>MAIL:</span> {{$employee->email}}</a>
    </div>
    {{-- <div style="display: flex;flex-direction:column;margin:10px 0 0 20px">
        <p>{{$company->company}}</p>
        <p><span>UL:</span>{{$company->address}}, {{$company->post_code}}</p>
        <p><span>TEL:</span>{{$company->phone}}, <span>FAX:</span>{{$company->fax}}</p>
    </div> --}}
    <div style="display: flex;flex-direction:column;margin:50px 0 0 20px">
        <p>Morska Agencja Gdynia Sp. z o.o.</p>
        <p><span>UL.</span>Tadeusza Wendy 15, 81-341 Gdynia</p>
        <p><span>TEL:</span> +48 58 785 37 40, <span>FAX:</span> +48 58 62 78 124</p>
    </div>
    
</body>
<style>
    *{
        font-family: 'nunito';
        text-decoration: none
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
        color: rgb(4, 4, 187);
        font-weight: 700;
    }
    h3{
        color: rgb(4, 4, 187);
        line-height: 1.5;
    }
</style>