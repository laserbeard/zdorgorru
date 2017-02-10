<!--
	components/modules/registration-step-oms-3-1.php
-->
<!-- multilevel-menu__item multilevel-menu__item--active - selected -->
<div class="multilevel-menu multilevel-menu--doctor">
	<ul class="multilevel-menu__list multilevel-menu__list--level-1">
		<!-- multilevel-menu__item toggle multilevel-menu__item--active -->
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Терапевт
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Отоларинголог
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Стоматолог
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm ">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Стоматолог
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Терапевт
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm  multilevel-menu__item--hidden">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Отоларинголог
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm  multilevel-menu__item--hidden">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Стоматолог
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm  multilevel-menu__item--hidden">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Стоматолог
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm  multilevel-menu__item--hidden  ">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Терапевт
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm  multilevel-menu__item--hidden">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Отоларинголог
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm  multilevel-menu__item--hidden">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Стоматолог
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm  multilevel-menu__item--hidden">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Стоматолог
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm  multilevel-menu__item--hidden  ">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Терапевт
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm  multilevel-menu__item--hidden">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Отоларинголог
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm  multilevel-menu__item--hidden">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Стоматолог
			</span>
		</li>
		<li class="multilevel-menu__item multilevel-menu__item--inline-sm  multilevel-menu__item--hidden">
			<span class="multilevel-menu__arrow-btn multilevel-menu__arrow-btn--pill-sm">
				Стоматолог
			</span>
		</li>

	</ul>
	<div class="multilevel-menu__load-more">
		<button class="multilevel-menu__load-more-btn"><i class="multilevel-menu__load-more-btn-icon"></i>Показать больше</button>
	</div>
</div>
<!-- multilevel-menu__result--doctor add multilevel-menu__result--visible after load content for visible-->
<div class="multilevel-menu__result multilevel-menu__result--doctor">
	<div class="registration-step-hidden__scroll">
		<ul class="doctors-item-list">
			<li>
				<ul class="doctor-item-list">
					<!-- ngRepeat: doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName] -->
					<li ng-repeat-start="doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName]" class="ng-scope">
						<ul class="doctor-item" ng-class="doctor.countFreeTicket> 0 ? '' : 'ticketsoff'">
							<li class="to-left doctor-picture color-3">
								БИ
							</li>
							<li class="to-left">
								<div class="doctor-name ng-binding">
									Белова Ирина Георгиевна
								</div>
								<div class="doctor-specialist ng-binding">
									Невролог
								</div>
								<div class="doctor-status ng-binding">
								</div>
							</li>
							<li class="to-right">
								<button class="btn btn-primary btn-success doctor-item__btn" ng-class="!doctorsVm.showDatepicker ? 'btn-success' : ''" ng-click="doctorsVm.selectDoctor(doctor)">
									выбрать время
								</button>
							</li>
							<li class="to-right">
								<div class="doctor-time ng-binding ">
									00:00
								</div>
							</li>
							<li class="to-right">
								<div class="doctor-tickets ng-binding">
									15
									<span>
										&nbsp;талонов
									</span>
								</div>
								<div class="doctor-from_date ng-binding">
									<span class="doctor-from_date__label-xs">
										Ближайшая запись:
									</span>
									<span class="doctor-from_date__label-sm">
										с
									</span>
									01.01.1970
								</div>
								<div class="doctor-ticketsoff">
									<span class="doctor-ticketsoff__value-xs">
										0
									</span>
									<span class="doctor-ticketsoff__value-sm">
										Нет талонов
									</span>
								</div>
							</li>
						</ul>
					</li>
					<!--datepicker-->
					<!-- Toggle ng-hide for show calendar -->
					<!-- remove Id on production -->
					<li id="demo_form" class="registration-form ng-scope ng-hide" ng-show="doctor.code == doctorsVm.selectedDoctor.code &amp;&amp; doctorsVm.showDatepicker" ng-repeat-end="">
						<div class="registration-step-hidden__scroll">
							<div class="registration-form_block registration-form_block-date " ng-show="!doctorsVm.loading.calendar">
								<div class="registration-form_block-title">
									Доступные дни приёма
								</div>
								<div class="datepicker " ng-show="doctorsVm.availableDates.length> 0" id="doctor-datepicker-15">
								</div>
								<div class="registration-form_agenda">
									<div class="agenda-block agenda-block__picked">
										Выбранный день
									</div>
									<div class="agenda-block agenda-block__availible">
										Дни Приёма
									</div>
									<div class="agenda-block agenda-block__weekend">
										Нерабочие дни
									</div>
									<div class="agenda-block agenda-block__today">
										Сегодня
									</div>
								</div>
							</div>
							<!--tickets-->
							<div class="registration-form_block registration-form_block-time">
								<div ng-show="!doctorsVm.loading.tickets &amp;&amp; doctorsVm.availableDates" class="">
									<div class="registration-form_block-title">
										Доступное время приёма
									</div>
									<div class="registration-form_timedesk">
										<ul class="timedesk">
											<li class="doctor-time">
												18:49
											</li>
											<li class="doctor-time">
												18:49
											</li>
											<li class="doctor-time">
												18:49
											</li>
										</ul>
										<ul class="timedesk">
											<li class="doctor-time">
												18:49
											</li>
											<li class="doctor-time">
												18:49
											</li>
											<li class="doctor-time">
												18:49
											</li>
										</ul>
										<ul class="timedesk">
											<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(10, 15) -->
										</ul>
										<ul class="timedesk">
											<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(15) -->
										</ul>
									</div>
									<div class="registration-form_final">
										<div class="little-text">
											Выбрано
										</div>
										<div class="registration-form_final-item registration-form_final-date ng-binding">
											14 окт 2016
										</div>
										<div class="registration-form_final-item registration-form_final-time ng-binding">
											18:00
										</div>
										<button class="btn btn-md btn-success btn-primary doctor-choose_confirm-btn" ng-click="doctorsVm.createAppontment()">
											Подтвердить
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>
					<!-- end ngRepeat: doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName]  -->
					<li ng-repeat-start="doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName]" class="ng-scope">
						<ul class="doctor-item ticketsoff" ng-class="doctor.countFreeTicket> 0 ? '' : 'ticketsoff'">
							<li class="to-left doctor-picture color-5">
								ВИ
							</li>
							<li class="to-left">
								<div class="doctor-name ng-binding">
									Вермель Инна Израйлевна
								</div>
								<div class="doctor-specialist ng-binding">
									Невролог
								</div>
								<div class="doctor-status ng-binding">
								</div>
							</li>
							<li class="to-right">
								<button class="btn btn-primary btn-success doctor-item__btn" ng-class="!doctorsVm.showDatepicker ? 'btn-success' : ''" ng-click="doctorsVm.selectDoctor(doctor)">
									выбрать время
								</button>
							</li>
							<li class="to-right">
								<div class="doctor-time ng-binding">
									00:00
								</div>
							</li>
							<li class="to-right">
								<div class="doctor-tickets ng-binding">
									0 талонов
								</div>
								<div class="doctor-from_date ng-binding">
									с 01.01.1970
								</div>
								<div class="doctor-ticketsoff">
									<span class="doctor-ticketsoff__value-xs">
										0
									</span>
									<span class="doctor-ticketsoff__value-sm">
										Нет талонов
									</span>
								</div>
							</li>
						</ul>
					</li>
					<!--datepicker-->
					<li class="registration-form ng-scope ng-hide" ng-show="doctor.code == doctorsVm.selectedDoctor.code &amp;&amp; doctorsVm.showDatepicker" ng-repeat-end="">
						<div class="loader" ng-show="doctorsVm.loading.calendar" style="margin: 35%; margin-top: 50%;">
							<img src="/Content/Images/loading.gif" alt=""/>
						</div>
						<div class="registration-form_block registration-form_block-date ng-hide" ng-show="!doctorsVm.loading.calendar">
							<div class="registration-form_block-title">
								Доступные дни приёма
							</div>
							<div class="datepicker ng-hide" ng-show="doctorsVm.availableDates.length> 0" id="doctor-datepicker-17">
							</div>
							<div class="registration-form_agenda">
								<div class="agenda-block agenda-block__picked">
									Выбранный день
								</div>
								<div class="agenda-block agenda-block__availible">
									Дни Приёма
								</div>
								<div class="agenda-block agenda-block__weekend">
									Нерабочие дни
								</div>
								<div class="agenda-block agenda-block__today">
									Сегодня
								</div>
							</div>
						</div>
						<!--tickets-->
						<div class="registration-form_block registration-form_block-time">
							<div class="loader" ng-show="doctorsVm.loading.tickets" style="margin: 35%; margin-top: 50%;">
								<img src="/Content/Images/loading.gif" alt=""/>
							</div>
							<div ng-show="!doctorsVm.loading.tickets &amp;&amp; doctorsVm.availableDates" class="ng-hide">
								<div class="registration-form_block-title">
									Доступное время приёма
								</div>
								<div class="registration-form_timedesk">
									<ul class="timedesk">
										<li class="doctor-time">
											18:49
										</li>
										<li class="doctor-time">
											18:49
										</li>
										<li class="doctor-time">
											18:49
										</li>
									</ul>
									<ul class="timedesk">
										<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(5, 10) -->
									</ul>
									<ul class="timedesk">
										<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(10, 15) -->
									</ul>
									<ul class="timedesk">
										<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(15) -->
									</ul>
								</div>
								<div class="registration-form_final">
									<div class="little-text">
										Выбрано
									</div>
									<div class="registration-form_final-item registration-form_final-date ng-binding">
										14 окт 2016
									</div>
									<div class="registration-form_final-item registration-form_final-time ng-binding">
										18:00
									</div>
									<button class="btn btn-md btn-success btn-primary doctor-choose_confirm-btn" ng-click="doctorsVm.createAppontment()">
										Подтвердить
									</button>
								</div>
							</div>
						</div>
					</li>
					<!-- end ngRepeat: doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName]  -->
					<li ng-repeat-start="doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName]" class="ng-scope">
						<ul class="doctor-item ticketsoff" ng-class="doctor.countFreeTicket> 0 ? '' : 'ticketsoff'">
							<li class="to-left doctor-picture color-5">
								КА
							</li>
							<li class="to-left">
								<div class="doctor-name ng-binding">
									Курганова Анжелика Константиновна
								</div>
								<div class="doctor-specialist ng-binding">
									Невролог
								</div>
								<div class="doctor-status ng-binding">
								</div>
							</li>
							<li class="to-right">
								<button class="btn btn-primary btn-success doctor-item__btn" ng-class="!doctorsVm.showDatepicker ? 'btn-success' : ''" ng-click="doctorsVm.selectDoctor(doctor)">
									выбрать время
								</button>
							</li>
							<li class="to-right">
								<div class="doctor-time ng-binding">
									00:00
								</div>
							</li>
							<li class="to-right">
								<div class="doctor-tickets ng-binding">
									0 талонов
								</div>
								<div class="doctor-from_date ng-binding">
									с 01.01.1970
								</div>
								<div class="doctor-ticketsoff">
									<span class="doctor-ticketsoff__value-xs">
										0
									</span>
									<span class="doctor-ticketsoff__value-sm">
										Нет талонов
									</span>
								</div>
							</li>
						</ul>
					</li>
					<!--datepicker-->
					<li class="registration-form ng-scope ng-hide" ng-show="doctor.code == doctorsVm.selectedDoctor.code &amp;&amp; doctorsVm.showDatepicker" ng-repeat-end="">
						<div class="loader" ng-show="doctorsVm.loading.calendar" style="margin: 35%; margin-top: 50%;">
							<img src="/Content/Images/loading.gif" alt=""/>
						</div>
						<div class="registration-form_block registration-form_block-date ng-hide" ng-show="!doctorsVm.loading.calendar">
							<div class="registration-form_block-title">
								Доступные дни приёма
							</div>
							<div class="datepicker ng-hide" ng-show="doctorsVm.availableDates.length> 0" id="doctor-datepicker-31">
							</div>
							<div class="registration-form_agenda">
								<div class="agenda-block agenda-block__picked">
									Выбранный день
								</div>
								<div class="agenda-block agenda-block__availible">
									Дни Приёма
								</div>
								<div class="agenda-block agenda-block__weekend">
									Нерабочие дни
								</div>
								<div class="agenda-block agenda-block__today">
									Сегодня
								</div>
							</div>
						</div>
						<!--tickets-->
						<div class="registration-form_block registration-form_block-time">
							<div class="loader" ng-show="doctorsVm.loading.tickets" style="margin: 35%; margin-top: 50%;">
								<img src="/Content/Images/loading.gif" alt=""/>
							</div>
							<div ng-show="!doctorsVm.loading.tickets &amp;&amp; doctorsVm.availableDates" class="ng-hide">
								<div class="registration-form_block-title">
									Доступное время приёма
								</div>
								<div class="registration-form_timedesk">
									<ul class="timedesk">
										<li class="doctor-time">
											18:49
										</li>
										<li class="doctor-time">
											18:49
										</li>
										<li class="doctor-time">
											18:49
										</li>
									</ul>
									<ul class="timedesk">
										<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(5, 10) -->
									</ul>
									<ul class="timedesk">
										<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(10, 15) -->
									</ul>
									<ul class="timedesk">
										<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(15) -->
									</ul>
								</div>
								<div class="registration-form_final">
									<div class="little-text">
										Выбрано
									</div>
									<div class="registration-form_final-item registration-form_final-date ng-binding">
										,
									</div>
									<div class="registration-form_final-item registration-form_final-time ng-binding">
										:
									</div>
									<button class="btn btn-md btn-success btn-primary doctor-choose_confirm-btn" ng-click="doctorsVm.createAppontment()">
										Подтвердить
									</button>
								</div>
							</div>
						</div>
					</li>
					<!-- end ngRepeat: doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName]  -->
					<li ng-repeat-start="doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName]" class="ng-scope">
						<ul class="doctor-item ticketsoff" ng-class="doctor.countFreeTicket> 0 ? '' : 'ticketsoff'">
							<li class="to-left doctor-picture color-5">
								МИ
							</li>
							<li class="to-left">
								<div class="doctor-name ng-binding">
									Мальцев Иван Александрович
								</div>
								<div class="doctor-specialist ng-binding">
									Невролог
								</div>
								<div class="doctor-status ng-binding">
								</div>
							</li>
							<li class="to-right">
								<button class="btn btn-primary btn-success doctor-item__btn" ng-class="!doctorsVm.showDatepicker ? 'btn-success' : ''" ng-click="doctorsVm.selectDoctor(doctor)">
									выбрать время
								</button>
							</li>
							<li class="to-right">
								<div class="doctor-time ng-binding">
									00:00
								</div>
							</li>
							<li class="to-right">
								<div class="doctor-tickets ng-binding">
									0 талонов
								</div>
								<div class="doctor-from_date ng-binding">
									с 01.01.1970
								</div>
								<div class="doctor-ticketsoff">
									<span class="doctor-ticketsoff__value-xs">
										0
									</span>
									<span class="doctor-ticketsoff__value-sm">
										Нет талонов
									</span>
								</div>
							</li>
						</ul>
					</li>
					<!--datepicker-->
					<li class="registration-form ng-scope ng-hide" ng-show="doctor.code == doctorsVm.selectedDoctor.code &amp;&amp; doctorsVm.showDatepicker" ng-repeat-end="">
						<div class="loader" ng-show="doctorsVm.loading.calendar" style="margin: 35%; margin-top: 50%;">
							<img src="/Content/Images/loading.gif" alt=""/>
						</div>
						<div class="registration-form_block registration-form_block-date ng-hide" ng-show="!doctorsVm.loading.calendar">
							<div class="registration-form_block-title">
								Доступные дни приёма
							</div>
							<div class="datepicker ng-hide" ng-show="doctorsVm.availableDates.length> 0" id="doctor-datepicker-1292">
							</div>
							<div class="registration-form_agenda">
								<div class="agenda-block agenda-block__picked">
									Выбранный день
								</div>
								<div class="agenda-block agenda-block__availible">
									Дни Приёма
								</div>
								<div class="agenda-block agenda-block__weekend">
									Нерабочие дни
								</div>
								<div class="agenda-block agenda-block__today">
									Сегодня
								</div>
							</div>
						</div>
						<!--tickets-->
						<div class="registration-form_block registration-form_block-time">
							<div class="loader" ng-show="doctorsVm.loading.tickets" style="margin: 35%; margin-top: 50%;">
								<img src="/Content/Images/loading.gif" alt=""/>
							</div>
							<div ng-show="!doctorsVm.loading.tickets &amp;&amp; doctorsVm.availableDates" class="ng-hide">
								<div class="registration-form_block-title">
									Доступное время приёма
								</div>
								<div class="registration-form_timedesk">
									<ul class="timedesk">
										<li class="doctor-time">
											18:49
										</li>
										<li class="doctor-time">
											18:49
										</li>
										<li class="doctor-time">
											18:49
										</li>
									</ul>
									<ul class="timedesk">
										<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(5, 10) -->
									</ul>
									<ul class="timedesk">
										<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(10, 15) -->
									</ul>
									<ul class="timedesk">
										<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(15) -->
									</ul>
								</div>
								<div class="registration-form_final ng-hide" ng-show="doctorsVm.selectedDate &amp;&amp; doctorsVm.selectedTicket.visitStart">
									<div class="little-text">
										Выбрано
									</div>
									<div class="registration-form_final-item registration-form_final-date ng-binding">
										,
									</div>
									<div class="registration-form_final-item registration-form_final-time ng-binding">
										:
									</div>
									<button class="btn btn-md btn-success btn-primary doctor-choose_confirm-btn" ng-click="doctorsVm.createAppontment()">
										Подтвердить
									</button>
								</div>
							</div>
						</div>
					</li>
					<!-- end ngRepeat: doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName]  -->
					<li ng-repeat-start="doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName]" class="ng-scope">
						<ul class="doctor-item ticketsoff" ng-class="doctor.countFreeTicket> 0 ? '' : 'ticketsoff'">
							<li class="to-left doctor-picture color-6">
								ПЕ
							</li>
							<li class="to-left">
								<div class="doctor-name ng-binding">
									Петрова Елизавета Леонидовна
								</div>
								<div class="doctor-specialist ng-binding">
									Невролог
								</div>
								<div class="doctor-status ng-binding">
								</div>
							</li>
							<li class="to-right">
								<button class="btn btn-primary btn-success doctor-item__btn" ng-class="!doctorsVm.showDatepicker ? 'btn-success' : ''" ng-click="doctorsVm.selectDoctor(doctor)">
									выбрать время
								</button>
							</li>
							<li class="to-right">
								<div class="doctor-time ng-binding">
									00:00
								</div>
							</li>
							<li class="to-right">
								<div class="doctor-tickets ng-binding">
									0 талонов
								</div>
								<div class="doctor-from_date ng-binding">
									с 01.01.1970
								</div>
								<div class="doctor-ticketsoff">
									<span class="doctor-ticketsoff__value-xs">
										0
									</span>
									<span class="doctor-ticketsoff__value-sm">
										Нет талонов
									</span>
								</div>
							</li>
						</ul>
					</li>
					<!--datepicker-->
					<li class="registration-form ng-scope ng-hide" ng-show="doctor.code == doctorsVm.selectedDoctor.code &amp;&amp; doctorsVm.showDatepicker" ng-repeat-end="">
						<div class="loader" ng-show="doctorsVm.loading.calendar" style="margin: 35%; margin-top: 50%;">
							<img src="/Content/Images/loading.gif" alt=""/>
						</div>
						<div class="registration-form_block registration-form_block-date ng-hide" ng-show="!doctorsVm.loading.calendar">
							<div class="registration-form_block-title">
								Доступные дни приёма
							</div>
							<div class="datepicker ng-hide" ng-show="doctorsVm.availableDates.length> 0" id="doctor-datepicker-1145">
							</div>
							<div class="registration-form_agenda">
								<div class="agenda-block agenda-block__picked">
									Выбранный день
								</div>
								<div class="agenda-block agenda-block__availible">
									Дни Приёма
								</div>
								<div class="agenda-block agenda-block__weekend">
									Нерабочие дни
								</div>
								<div class="agenda-block agenda-block__today">
									Сегодня
								</div>
							</div>
						</div>
						<!--tickets-->
						<div class="registration-form_block registration-form_block-time">
							<div class="loader" ng-show="doctorsVm.loading.tickets" style="margin: 35%; margin-top: 50%;">
								<img src="/Content/Images/loading.gif" alt=""/>
							</div>
							<div ng-show="!doctorsVm.loading.tickets &amp;&amp; doctorsVm.availableDates" class="ng-hide">
								<div class="registration-form_block-title">
									Доступное время приёма
								</div>
								<div class="registration-form_timedesk">
									<ul class="timedesk">
										<li class="doctor-time">
											18:49
										</li>
										<li class="doctor-time">
											18:49
										</li>
										<li class="doctor-time">
											18:49
										</li>
									</ul>
									<ul class="timedesk">
										<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(5, 10) -->
									</ul>
									<ul class="timedesk">
										<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(10, 15) -->
									</ul>
									<ul class="timedesk">
										<!-- ngRepeat: ticket in doctorsVm.availableTickets.slice(15) -->
									</ul>
								</div>
								<div class="registration-form_final ng-hide" ng-show="doctorsVm.selectedDate &amp;&amp; doctorsVm.selectedTicket.visitStart">
									<div class="little-text">
										Выбрано
									</div>
									<div class="registration-form_final-item registration-form_final-date ng-binding">
										,
									</div>
									<div class="registration-form_final-item registration-form_final-time ng-binding">
										:
									</div>
									<button class="btn btn-md btn-success btn-primary doctor-choose_confirm-btn" ng-click="doctorsVm.createAppontment()">
										Подтвердить
									</button>
								</div>
							</div>
						</div>
					</li>
					<!-- end ngRepeat: doctor in doctorsVm.doctors[doctorsVm.selectedSpecialtyName]  -->
				</ul>
			</li>
		</ul>
	</div>
</div>
