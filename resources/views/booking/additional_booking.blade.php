<table width="100%" class="table table-striped table-bordered table-hover ">
    <thead >
        <tr>
            <th style="width: 25%" align="center">Logo</th>
            <th style="width: 25%" align="center">Name</th>
            <th style="width: 20%" align="center">Procie</th>
            <th align="center">Select Person</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($detail_intinerary->intinerary->add as $val)
        <tr class="add_tr">
            <td align="left">
                <img width="100" height="100" src="{{ route('storage') }}/additional/additional-{{ $val->ma_image }}?'{{ time() }}'" >
            </td> 
            <td align="left">
                <p class="add_name">{{ $val->ma_name }}</p>
                <input type="hidden" class="add_id" value="{{ $val->ma_id }}">
            </td>
            <td align="right">
                <p class="add_price_text">{{ number_format($val->ma_price, 0, ",", ".") }}</p>
                <input type="hidden" class="add_price" value="{{ $val->ma_price }}">
            </td>
            <td class="sel_opt">
                <select class=" additional form-control selectpicker" multiple data-size="4" data-actions-box="true">
                    @foreach ($data as $i=>$row)
                        <option value="{{ $data[$i] }}">{{ $data[$i] }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script type="text/javascript">
    $('.additional').selectpicker('refresh');
</script>