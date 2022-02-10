<!DOCTYPE html>
<html>
<head><style>
    *{
        font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;
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
        color: rgb(58, 77, 168);
        font-weight: 700;
    }
    h3{
        color: rgb(58, 77, 168);
        line-height: 1.5;
    }
</style></head>
<body >
    <div style="color: #000;width:726px;padding:20px 0 0 20px;">
    <div style="display:flex;">
        <div>
            <div style="width:450px;">
                <a href="http://mag.pl"><img src="{{url('/images/mag_logo.png')}}" width="200px"/></a>
                <div style="display: flex;flex-direction:column;margin-left:20px">
                    <p style="margin-top: 18px">{{__("Best regards")}}</p>
                    <h3 style="margin-bottom:0;margin-top:10px">{{$employee->name}}</h3>
                    <p>{{$employee->position}}</p>
                    <p><span>&#9679;</span> {{$employee->department}}</p>
                </div>
                <div style="display: flex;flex-direction:column;margin:10px 0 0 20px;">
                    <p><span>MOB:</span> {{$employee->mobile}}</p>
                    <a href='mailto:{{$employee->email}}'><span>MAIL:</span> {{$employee->email}}</a>
                </div>
                <div style="display: flex;flex-direction:column;margin:40px 0 10px 20px">
                    <p>{{$company->company}}</p>
                    <p><span>{{__("ADDRESS")}}: </span>{{$company->street}} {{$company->street_number}}, {{$company->post_code}} {{$company->city}}</p>
                    <p><span>TEL: </span>{{$company->phone}}, <span>FAX: </span>{{$company->fax}}</p>
                </div>
            </div>
            <div>
                <img src="{{url('/images/ship-01.svg')}}" alt="" style="margin-top: -300px">
                <div style="display: flex;margin-top:-40px;"> 
                    <p style="font-size:.66rem;margin-left:20px;flex:0 0 450px">{{$company->nip}}</p>
                    <div style="display:flex;align-items:flex-start;justify-content:flex-end;flex:1;">
                        <a href="https://{{$company->www}}" target="_blank" style="color: rgb(58, 77, 168);font-size:.9rem;padding-bottom:10px;font-weight:700;">{{$company->www}}</a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 10px;">
        <p style="font-size:.75rem;margin-left:20px;">Przetwarzamy dane osobowe zgodnie z obowiązującym prawem. Więcej informacji znajdą Państwo w naszej polityce prywatności, dostępnej na: <a href="http://www.mag.pl/rodo" target="_blank">www.mag.pl/rodo</a>.</p>
    </div>
    <div style="display:flex;flex-direction:row;justify-content:center;margin-top: 10px;">
        <img src="{{url("/images/aeo.webp")}}" alt="aeo" width="100px">
        <img src="{{url("/images/fonasba.webp")}}" alt="fonasba" width="100px">
        <img src="{{url("/images/gmp.webp")}}" alt="gmp" width="100px">
    </div>
</div>
</body>
    
</html>