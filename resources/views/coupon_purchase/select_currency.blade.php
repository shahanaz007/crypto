				<p><b>Currency :</b> 
							<select class="form-control" name="currency" id="currency_id" required="">
								<option value="">Select Currency</option>
							@if(count($rates) > 0)
							@foreach($rates as $rate)
										
	                            <option value="{{$rate['coin']}}">{{$rate['coin']}}  ( {{$rate['rate']}} )</option>
	                        	
	                        @endforeach	
	                        @endif
	                        </select>
	                  </p>  