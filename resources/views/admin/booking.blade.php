</div>
  </div>
 </div>
</table> ```

---

### The Fixed Code
Copy and paste this version. I have added the missing `<td>` for the Status Update and cleaned up the `div` nesting:

```html
<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <style type="text/css">
    .table_deg {
        border: 2px solid white;
        margin: auto;
        width: 100%;
        text-align: center;
        margin-top: 40px;
        table-layout: fixed; /* Helps keep columns aligned */
    }

    .th_deg {
        background-color: skyblue;
        padding: 15px;
        font-size: 14px;
    }

    tr {
        border: 3px solid white;
    }

    td {
        padding: 10px;
        color: white;
        word-break: break-all; /* Prevents long emails from breaking the layout */
    }

    /* Set a specific width for the image so it doesn't push columns */
    .table_deg img {
        width: 80px;
        height: auto;
    }
   </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">

          <table class="table_deg">
            <thead>
              <tr>
                <th class="th_deg">Room_id</th>
                <th class="th_deg">Customer name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">Arriving Date</th>
                <th class="th_deg">Leaving Date</th>
                <th class="th_deg">Status</th>
                <th class="th_deg">Room Title</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Status Update</th>
              </tr>
            </thead>

            <tbody>
              @foreach($data as $data)
              <tr>
                <td>{{$data->room_id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->start_date}}</td>
                <td>{{$data->end_date}}</td>
                <td>

                @if($data->status == 'approve')

                <span style="color: skyblue;">Approved</span>

                @endif

                 @if($data->status == 'rejected')

                <span style="color: red;">Rejected</span>

                @endif

                 @if($data->status == 'waiting')

                <span style="color: yellow;">Waiting</span>

                @endif



                </td>
                <td>{{$data->room->room_title}}</td>
                <td>{{$data->room->price}}</td>
                <td>
                    <img src="/room/{{$data->room->image}}">
                </td>
                <td>
                    <a onclick="return confirm('Are you sure to delete this?');" class="btn btn-danger" href="{{url('delete_booking', $data->id)}}">Delete</a>
                </td>
                <td>
                    <span style="padding-bottom: 10px;">
                    <a class="btn btn-success" href="{{url('approve_book',$data->id)}}">Approve</a> 
                    </span>
                    <a class="btn btn-warning" href="{{url('reject_book',$data->id)}}">Rejected</a> 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div> </div> </div> @include('admin.footer')
  </body>
</html>