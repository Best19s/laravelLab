<h1>รายชื่อบริษัททั้งหมด</h1>
<table border="1px">
   <tr>
      <th>ชื่อบริษัท</th>
      <th>ราคาที่จดทะเบียน</th>
      <th>ขนาดบริษัท</th>
      <th>ชื่อเจ้าของบริษัท</th>
   </tr>

   @foreach ($company as $company_s)
   <tr>
      <td>{{$company_s->company_name}}</td>
      <td>{{ number_format($company_s->company_price) }}</td>

      @if ($company_s->company_price<5000000)
      <td>ขนาดเล็ก</td>
      @elseif ($company_s->company_price>=5000000)
      <td>ขนาดกลาง</td>
      @elseif ($company_s->company_price>=10000000)
      <td>ขนาดใหญ่</td>
      @endif

      {{-- <td>{{$company_s->users->name}}</td> --}}

   </tr>
   @endforeach
</table>
