<!--
	components/modules/registration-step-oms-4.php
-->
<h6 class="registration-step__title">
	<span class="registration-step__counter">
		4
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
<div class="registration-step__hidden">
	<div class="registration-step-hidden__scroll">
		<div class="registration-step__confirmation-container">
			<div class="registration-step__confirmation">
				<p class="registration-step__confirmation-birth-label">
					Введите ваши данные для подтверждения
				</p>

				<div class="registration-step__confirmation-fields">
				
				    <?php  include 'components/registration-step__input-g/registration-step__input--text.php'; ?>
				    <?php  include 'components/registration-step__input-g/registration-step__input--calend.php'; ?>
				</div>

				
					<?php  include 'components/registration-step__input-g/registration-step__input--submit.php'; ?>

			</div>
			
			<?php include 'registration-step-privacy-info.php'; ?>

			<div class="clearfix">
			</div>
		</div>
	</div>
</div>
