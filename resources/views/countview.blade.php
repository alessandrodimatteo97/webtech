 <div class="total">
	<div class="sub">
		<p><span>Subtotal:</span> @if($total != 0)<span id="subtotal">${{$total}}</span>@endif</p>
		<p><span>Delivery:</span> <span>$0.00</span></p>
		<p><span>Discount:</span> @if(!(empty($discount)))<span>${{$discount}}</span>@else<span>$0.00</span>@endif</p>
	</div>
	<div class="grand-total">
		<p><span><strong>Total:</strong></span> @if($newtotal != 0)<span>${{$newtotal}}</span>@endif</p>
	</div>
</div>
