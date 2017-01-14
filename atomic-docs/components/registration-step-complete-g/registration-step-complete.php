<!--
	components/registration-step-complete-g/registration-step-complete.php
-->
<section class="registration-step-complete">
	<div class="page-container">
		<div class="registration-step-complete__body">
			<?php  include 'components/registration-step-complete__title-g/registration-step-complete__title.php'; ?>
			<div class="registration-step-complete__table clearfix">
				
				<div class="registration-step-complete__table-row">
					
						<?php include 'components/registration-step-complete__value-g/registration-step-complete__value--number.php'; ?>
						<?php include 'components/registration-step-complete__value-g/registration-step-complete__value--username.php'; ?>
					
				</div>

				<div class="registration-step-complete__table-row">
					
						<!-- date -->
						<?php include 'components/registration-step-complete__value-g/registration-step-complete__value--date.php'; ?>
						<!-- clinic -->
						<?php include 'components/registration-step-complete__value-g/registration-step-complete__value--clinic.php'; ?>
					
					
					
				</div>

				<div class="registration-step-complete__table-row">

				
						<!-- date -->
						<?php include 'components/registration-step-complete__value-g/registration-step-complete__value--doctor.php'; ?>
						<!-- clinic -->
						<?php include 'components/registration-step-complete__value-g/registration-step-complete__value--apptype.php'; ?>

				</div>

			</div>
		</div>
		<?php include 'components/registration-step-complete__create-account-g/registration-step-complete__create-account.php'; ?>
	</div>
</section>
