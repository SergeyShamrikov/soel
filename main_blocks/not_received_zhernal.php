<div class="modal" id="not_received_zhernal_box">
	<h3 class="title3 bdb">Сообщить о недоставленном номере
	журнала «Современная электроника»</h3>
	<form class="modal_box" action="" id="not_received_zhernal">
		<div class="clearfix imput_box">
			<label class="f_left w100 p4" for="email">E-mail<sup class="necessarily_marker">*</sup></label>
			<input class="f_right modal_inp w100" type="text" id="email">
		</div>
		<div class="clearfix imput_box">
			<label class="f_left w100 p4" for="">Телефон<sup class="necessarily_marker">*</sup></label>
			<input class="modal_inp tel_country" type="text" value="+7" onBlur="if(this.value=='') this.value='+7'" onFocus="if(this.value =='+7' ) this.value=''">
			(<input class="modal_inp tel_cod" type="text" value="Код" onBlur="if(this.value=='') this.value='Код'" onFocus="if(this.value =='Код' ) this.value=''">)
			<input class="modal_inp tel_number" type="text" value="Номер" onBlur="if(this.value=='') this.value='Номер'" onFocus="if(this.value =='Номер' ) this.value=''">
		</div>
		<div class="clearfix imput_box">
			<label class="f_left w100 p4" for="">Недоставленный номер журнала<sup class="necessarily_marker">*</sup></label>
			<select name="number" id="" class="f_left d_block modal_inp">
				<option value="">Номер</option>
				<option value="">№1</option>
				<option value="">№2</option>
				<option value="">№3</option>
				<option value="">№4</option>
				<option value="">№5</option>
				<option value="">№6</option>
				<option value="">№7</option>
				<option value="">№8</option>
				<option value="">№9</option>
			</select>
			<select name="year" id="" class="f_left d_block modal_inp">
				<option value="">Год</option>
				<option value="">2001</option>
				<option value="">2002</option>
				<option value="">2003</option>
				<option value="">2004</option>
				<option value="">2005</option>
				<option value="">2006</option>
				<option value="">2007</option>
				<option value="">2008</option>
				<option value="">2009</option>
				<option value="">2010</option>
				<option value="">2011</option>
				<option value="">2012</option>
				<option value="">2013</option>
				<option value="">2014</option>
			</select>
		</div>
		<div class="clearfix imput_box">
			<h4 class="modal_titile p4">Получали ли вы по этому же заявленному
адресу предыдущие номера текущего года?<sup class="necessarily_marker">*</sup></h4>
			<input class="" type="radio" name="question" value="answer1" id="answer_yes">
			<label class="" type="radio" for="answer_yes">Да</label>
			<input class="" type="radio" name="question" value="answer2" id="answer_no">
			<label class="" type="radio" for="answer_no">Нет</label>
		</div>
		<div class="clearfix imput_box">
			<h4 class="modal_titile p4">Комментарий</h4>
			<textarea name="coment_text" id=""></textarea>
		</div>
		<button class="modal_btn">Войти</button>
		<div class="required">
			<sup class="necessarily_marker">*</sup>
			<span>- поля, обязательные для заполнения</span>
		</div>
	</form>

</div>