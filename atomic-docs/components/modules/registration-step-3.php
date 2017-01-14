<!--
	components/modules/registration-step-oms-3.php
-->
<h6 class="registration-step__title">
	<span class="registration-step__counter">
		3
	</span>
	<span class="registration-step-value__label--tablet-desktop">
		Выберите врача и время
	</span>
</h6>

<div class="registration-step-value registration-step-value--visible-xs">
	<span class="registration-step-value__label--mobile">
		Врач
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

<div class="registration-step-value">
	<span class="registration-step-value__label--mobile">
		Время
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
		<!-- Врач -->
		<?php include 'registration-step-oms-3-1.php'; ?>
		<!-- Время -->
		<?php include 'registration-step-oms-3-2.php'; ?>
		<div class="clearfix">
		</div>
	</div>
</div>
