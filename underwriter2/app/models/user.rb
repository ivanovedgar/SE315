class User < ActiveRecord::Base
validates_presence_of :title, :name, :surname, :DOB, :telephoneNumber, :address, :currentLicenseType, :licensePeriod, :occupation, :vehicleRegistration, :estimatedAnnualMileage, :estimatedVehicleValue, :typicalParkingLocation, :policyStartDate, :numberOfIncidents, :policyExcess, :breakdownCover

end
