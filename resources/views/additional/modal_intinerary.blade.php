<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="padding-top: 30px;color: white" id="exampleModalLongTitle"><b>Detail Itinerary</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <table class="table" width="100%">
              <tr>
                <th>Kode</th>
                <th>Remain / Seat</th>
                <th>Date</th>
              </tr>
              @foreach ($detail as $detil)
             <tr>
                <td>{{ $detil->md_nota }}</td>
                <td> 
                  @if ($detil->md_seat_remain == null)
                    0 / {{ $detil->md_seat }} 
                  @else
                    {{ $detil->md_seat_remain }} / {{ $detil->md_seat }}
                  @endif
                </td>
                <td>{{ date('d M Y',strtotime($detil->md_start))  }} - {{ date('d M Y',strtotime($detil->md_end))  }}</td>
              </tr>
              @endforeach 
             <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-book" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>