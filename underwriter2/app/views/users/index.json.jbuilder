json.array!(@users) do |user|
  json.extract! user, :title, :name, :surname, :DOB, :telephoneNumber, :address, :currentLicenseType, :licensePeriod, :occupation, :vehicleRegistration, :estimatedAnnualMileage, :estimatedVehicleValue, :typicalParkingLocation, :policyStartDate, :numberOfIncidents, :policyExcess, :breakdownCover, :quote
  json.url user_url(user, format: :json)
end
