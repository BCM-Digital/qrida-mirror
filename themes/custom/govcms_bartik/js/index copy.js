jQuery( document ).ready( function( $ ) {
  console.log('JS Initialized');

  var hash = window.location.hash;
  var target = hash.split('#')[1];

  if(hash) {
    $('.nav-pill .btn').removeClass('active');
    $('.tab-pane').removeClass('active show');
    $(hash).addClass('active');
    $('.tab-pane[aria-labelledby="' + target + '"]').addClass('active show');
  };

  $(window).scroll(function() {
    if ($(this).scrollTop() > 100){
      $('.scroll-top').addClass('active');
      $('.scroll-top').on('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    } else {
      $('.scroll-top').removeClass('active');
    }
  });

  if($('.views-all-people').length) {
    Drupal.behaviors.myBehavior = {
      attach: function (context, settings) {
        $('input[data-drupal-selector="edit-field-postcodes-target-id"]').prop('maxlength', 4);
        $('input[data-drupal-selector="edit-field-postcodes-target-id"]').attr('data-autocomplete-path', null);
        $('select[data-drupal-selector="edit-field-region-target-id"]').on('change', function() {
          $('input[data-drupal-selector="edit-field-postcodes-target-id"]').prop('value', null);
        });
        $('input[data-drupal-selector="edit-field-postcodes-target-id"]').on('focus', function() {
          $('option[value="All"]').prop('selected', true);
        });
        once('filterByPostcode', 'input.js-form-submit', context).forEach(function (element) {
          $(element).addClass('postcode-filtered');

          if($('.people-card').length) {
            // var peopleRegion = $('.people-card').data('region');
            var regionID = $('.people-card').data('region-id');
            console.log(regionID);

            $('option[value="' + regionID + '"]').prop('selected', true);
          };

          // const burnett = ['4402', '4550', '4551', '4552', '4553', '4554', '4555', '4556', '4557', '4558', '4559', '4560', '4561', '4562', '4563', '4564', '4565', '4566', '4567', '4568', '4569', '4570', '4571', '4572', '4573', '4574', '4575', '4580', '4600', '4601', '4605', '4606', '4608', '4608', '4610', '4611', '4612', '4613', '4614', '4615', '4620', '4621', '4625', '4626', '4627', '4630', '4719', '4408', '4515', '4410'];
          // const capricornia = ['4676', '4677', '4678', '4680', '4694', '4695', '4699', '4700', '4701', '4702', '4703', '4705', '4707', '4710', '4711', '4712', '4713', '4714', '4715', '4716', '4717', '4718', '4739', '4745', '4746'];
          // const centralCoast = ['4705', '4737', '4738', '4740', '4741', '4742', '4743', '4744', '4750', '4751', '4753', '4754', '4756', '4757', '4798', '4799', '4800', '4801', '4802', '4803', '4804', '4805', '4806'];
          // const centralHighlands = ['4472', '4478', '4709', '4720', '4721', '4722', '4723', '4724', '4725', '4726', '4727', '4728', '4730', '4731'];
          // const darlingDowns = ['4280', '4287', '4311', '4411', '4412', '4421', '4422', '4313', '4350', '4352', '4353', '4354', '4355', '4356', '4357', '4358', '4359', '4360', '4361', '4362', '4363', '4364', '4365', '4370', '4371', '4372', '4373', '4374', '4375', '4376', '4377', '4378', '4380', '4381', '4382', '4383', '4385', '4387', '4388', '4390', '4400', '4401', '4403', '4404', '4405', '4406', '4407', '4413'];
          // const farNorth = ['4849', '4850', '4852', '4854', '4855', '4856', '4857', '4858', '4859', '4860', '4861', '4865', '4868', '4869', '4870', '4871', '4871', '4872', '4873', '4874', '4875', '4876', '4877', '4878', '4879', '4880', '4881', '4882', '4883', '4884', '4885', '4886', '4887', '4888', '4895'];
          // const maranoa = ['4390', '4415', '4419', '4420', '4424', '4425', '4427', '4428', '4454', '4455', '4462', '4465', '4468', '4470', '4477', '4480', '4481', '4486', '4487', '4488', '4490', '4492', '4494', '4496', '4497', '4498', '4416', '4417'];
          // const north = ['4807', '4808', '4809', '4810', '4811', '4812', '4813', '4814', '4815', '4816', '4817', '4818', '4819', '4820'];
          // const northWest = ['4733', '4735', '4822', '4823', '4824', '4825', '4828', '4829', '4830', '4890', '4891', '4821'];
          // const southEast = ['4000', '4005', '4006', '4007', '4008', '4009', '4010', '4011', '4012', '4013', '4014', '4017', '4018', '4019', '4020', '4021', '4022', '4025', '4030', '4031', '4032', '4034', '4035', '4036', '4037', '4051', '4053', '4054', '4055', '4059', '4060', '4061', '4064', '4065', '4066', '4067', '4068', '4069', '4070', '4072', '4073', '4074', '4075', '4076', '4077', '4078', '4101', '4102', '4103', '4104', '4105', '4106', '4107', '4108', '4109', '4110', '4111', '4112', '4113', '4114', '4115', '4116', '4117', '4118', '4119', '4120', '4121', '4123', '4124', '4125', '4127', '4127', '4128', '4129', '4130', '4131', '4132', '4133', '4151', '4152', '4153', '4154', '4155', '4156', '4157', '4158', '4159', '4160', '4161', '4163', '4164', '4165', '4169', '4170', '4171', '4172', '4173', '4174', '4178', '4179', '4183', '4184', '4205', '4207', '4208', '4209', '4210', '4211', '4212', '4213', '4214', '4215', '4216', '4217', '4218', '4219', '4220', '4221', '4223', '4224', '4225', '4226', '4227', '4228', '4229', '4230', '4270', '4271', '4272', '4275', '4300', '4301', '4303', '4304', '4305', '4306', '4307', '4310', '4311', '4312', '4340', '4341', '4343', '4344', '4345', '4346', '4347', '4500', '4501', '4502', '4503', '4504', '4505', '4506', '4508', '4509', '4510', '4511', '4521', '4507', '4512', '4514', '4516', '4517', '4518', '4519', '4520', '4285', '4309'];
          // const lockyerValley = [];
          // const wideBay = ['4581', '4650', '4655', '4659', '4660', '4662', '4670', '4671', '4673', '4674', '4680'];

          // var postcodeVal = $('input[data-drupal-selector="edit-field-postcodes-target-id"]').val();
          // console.log(postcodeVal);

          // if(jQuery.inArray(postcodeVal, burnett) >= 0) {
          //   $('option[value="3"]').prop("selected", "selected");
          //   console.log('Burnett');
          // };
          // if(jQuery.inArray(postcodeVal, capricornia) >= 0) {
          //   $('option[value="4"]').prop("selected", "selected");
          //   console.log('Capricornia');
          // };
          // if(jQuery.inArray(postcodeVal, centralCoast) >= 0) {
          //   $('option[value="5"]').prop("selected", "selected");
          //   console.log('Central Coast');
          // };
          // if(jQuery.inArray(postcodeVal, centralHighlands) >= 0) {
          //   $('option[value="6"]').prop("selected", "selected");
          //   console.log('Central Highlands');
          // };
          // if(jQuery.inArray(postcodeVal, darlingDowns) >= 0) {
          //   $('option[value="7"]').prop("selected", "selected");
          //   console.log('Darling Downs');
          // };
          // if(jQuery.inArray(postcodeVal, farNorth) >= 0) {
          //   $('option[value="8"]').prop("selected", "selected");
          //   console.log('Far North');
          // };
          // if(jQuery.inArray(postcodeVal, maranoa) >= 0) {
          //   $('option[value="9"]').prop("selected", "selected");
          //   console.log('Maranoa');
          // };
          // if(jQuery.inArray(postcodeVal, north) >= 0) {
          //   $('option[value="10"]').prop("selected", "selected");
          //   console.log('North');
          // };
          // if(jQuery.inArray(postcodeVal, northWest) >= 0) {
          //   $('option[value="11"]').prop("selected", "selected");
          //   console.log('North West');
          // };
          // if(jQuery.inArray(postcodeVal, southEast) >= 0) {
          //   $('option[value="12"]').prop("selected", "selected");
          //   $('option[value="94"]').prop("selected", "selected");
          //   console.log('South East');
          // };
          // if(jQuery.inArray(postcodeVal, lockyerValley) >= 0) {
          //   $('option[value="13"]').prop("selected", "selected");
          //   console.log('Far North');
          // };
          // if(jQuery.inArray(postcodeVal, wideBay) >= 0) {
          //   $('option[value="14"]').prop("selected", "selected");
          //   console.log('Wide Bay');
          // };
        });
      }
    };
  };
});
