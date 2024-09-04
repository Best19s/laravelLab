<body>

   <table border="1px">
      <tr>
         <th>รหัสบริษัท</th>
         <th>ชื่อบริษัท</th>
         <th>ราคาที่จดทะเบียน</th>
         <th>ขนาดบริษัท</th>
         <th>ชื่อเจ้าของบริษัท</th>
      </tr>
      @foreach($users as $user)
      <p>{{$user->company}}</p>
      {{-- <p>{{$user}}</p> --}}
      {{-- <td>{{$com}}</td> --}}
      @foreach ($user->company as $com)
      <tr>
            <td>{{$com->id}}</td>
            <td>{{$com->company_name}}</td>
            <td>{{ number_format($com->company_price) }}</td>
            @if ($com->company_price < 5000000)
            <td>ขนาดเล็ก</td>
            @elseif ($com->company_price < 10000000)
            <td>ขนาดกลาง</td>
            @else
            <td>ขนาดใหญ่</td>
            @endif
            <td>{{$user->name}}</td>
         </tr>
         @endforeach
      @endforeach


      {{-- @foreach($user->company as $com)
      <tr>
         <td>{{$com->id}}</td>
         <td>{{$com->company_name}}</td>
         <td>{{ number_format($com->company_price) }}</td>

         @if ($com->company_price < 5000000)
         <td>ขนาดเล็ก</td>
         @elseif ($com->company_price < 10000000)
         <td>ขนาดกลาง</td>
         @else
         <td>ขนาดใหญ่</td>
         @endif

         <td>{{$user->name}}</td>
      </tr>
      @endforeach --}}
      {{-- @endforeach --}}

   </table>
</body>
