<!--
	components/modules/registration-step-manage-2-1.php
-->




 <ul class="doctors-item-list doctors-item-list--appointment-manage">
			<li>
				<ul class="doctor-item-list doctor-item-list--appointment-manage">
					<!-- ngRepeat: doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName] -->
					<li ng-repeat-start="doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName]" class="ng-scope">
						<ul class="doctor-item doctor-item--appointment-manage">
							<li class="to-left doctor-picture color-3">
								БИ
							</li>
							<li class="to-left doctor_info--appointment-manage">
								<div class="doctor-name ng-binding">
									Белова Ирина Георгиевна
								</div>
								<div class="doctor-specialist">
									Невролог
								</div>
								<div class="doctor-address">
								    Поликлиника №10050, Невский проспект, д 51
								</div>
							</li>
							<li class="to-right doctor_btn--appointment-manage">
								<button class="btn btn-primary doctor-item__btn doctor-item__btn--appointment-manage">
									Отменить
								</button>
							</li>
							<li class="to-right doctor_time--appointment-manage">
								<div class="doctor-time doctor-time--appointment-manage">
									00:00
								</div>
							</li>
							<li class="to-right doctor_date--appointment-manage">
							
								<div class="doctor-from_date doctor-from_date--appointment-manage">
									12 июн 2016
								</div>

							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
		
<div class="clearfix"></div>

<div class="appintment-manage-empty">
	Сейчас у вас нет записей
</div>