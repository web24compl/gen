<body style="color: #000; width: fit-content; line-height: 1.5">
  <div style="border-bottom: 1px solid #ccc; padding: 10px">
      <a href="https://mag.pl" target="_blank"><img width="200px" src="" alt="mag-logo"/></a>
  </div>
  <table style="margin-top: 10px; font-size: 12px">
      <tr>
          <td style="padding: 5px 10px; vertical-align: top">
              <div style="margin-top: 0; margin-bottom: auto">
                  <h3 style="margin-top: 0; display: inline">{{$employee->name}}</h3><br>
                      <h4 style="display: inline; color: blue;">{{$employee->position}}</h2><br>
                  {{$employee->phone}}<br>
                  <a style="color: #000; text-decoration: none;" href="mailto:{{$employee->email}}">{{$employee->email}}</a>
              </div>
          </td>
          <td rowspan="2" style="padding: 5px 10px; border-left: 1px solid #ccc">
              Morska Agencja Gdynia Sp. z o.o.
              <br>81-341 Gdynia
              <br>Ul T. Wendy 15
              <br>NIP: 586-015-78-96
              <br>
              <br>+48 58 785 37 85
              <br><a style="color: #000; text-decoration: none;" href="mailto:mag@mag.pl">mag@mag.pl</a>
          </td>
      </tr>
      <tr>
          <td style="vertical-align: bottom">
              <div style="margin-left: 10px">
                  <a href="" target="_blank"><img src="https://procer.com.pl/storage/email/procer/facebook.png" alt="procer-facebook"></a>
                  <a style="margin-left: 10px" href="" target="_blank"><img src="https://procer.com.pl/storage/email/procer/instagram.png" alt="procer-instagram"></a>
              </div>
          </td>
      </tr>
  </table>
  {{$employee}}
</body>