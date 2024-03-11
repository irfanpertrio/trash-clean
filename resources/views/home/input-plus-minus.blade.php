<div class="input-group input-group-sm">
    <button type="button" class="btn btn-secondary btn-number" data-type="minus"
        data-field="quant[{{ $number }}]">
        <i class="bi bi-dash-lg"></i>
    </button>
    <input type="text" id="quant[{{ $number }}]" name="quant[{{ $number }}]" class="form-control input-number" value="1"
        min="0" max="10">
    <button type="button" class="btn btn-primary btn-number" data-type="plus"
        data-field="quant[{{ $number }}]">
        <i class="bi bi-plus-lg"></i>
    </button>
</div>
