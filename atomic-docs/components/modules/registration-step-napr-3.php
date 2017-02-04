<!-- components/modules/registration-step-napr-3.php -->

<h6 class="registration-step__title">
	<span class="registration-step__counter">
		3
	</span>
	
	<span class="registration-step-value__label--tablet-desktop">
		Подтверждение
	</span>
</h6>

<div class="registration-step-value">
	<span class="registration-step-value__label--mobile">
		Подтверждение
	</span>
	<span class="registration-step-value__value">
		Не выбрано
	</span>
	<button class="registration-step-change-value-btn">
		<span class="registration-step-change-value-btn__text-change">
			Изменить
		</span>
		<span class="registration-step-change-value-btn__text-select">
			Выбрать
		</span>
	</button>
</div>
<div class="clearfix">
</div>
<div class="registration-step__hidden registration-step__hidden--confirmation">
	<div class="registration-step-hidden__scroll">
		<div class="registration-step__confirmation-container">
			<div class="registration-step__confirmation">
				<p class="registration-step__confirmation-birth-label">
					Введите ваши данные для подтверждения
				</p>

				<div class="registration-step__confirmation-fields">
				
				    <?php  include 'components/registration-step__input-g/registration-step__input--text.php'; ?>
				    
				    <div class="registration-step__input-group registration-step__input--confirmation">
                					
                    					<input type="number" name="day" value="" class="
                                        registration-step__input
                    					registration-step__input--number
                    					registration-step__input--birth-day
                                        registration-login-form__input
                    					" placeholder="01">
                    					
                    					
                    					<input type="number" name="month" value="" class="
                                        registration-step__input
                    					registration-step__input--number
                    					registration-step__input--birth-month
                                        registration-login-form__input
                    					" placeholder="05">
                    					
                    					<input type="number" name="year" value="" class="
                                        registration-step__input
                    					registration-step__input--number
                    					registration-step__input--birth-year
                                        registration-login-form__input
                    					" placeholder="1960">
                					
                	</div>
                	
				</div>

				
					<?php  include 'components/registration-step__input-g/registration-step__input--submit.php'; ?>

			</div>
			
			<?php include 'registration-step-privacy-info.php'; ?>

			<div class="clearfix">
			</div>
		</div>
	</div>
</div>