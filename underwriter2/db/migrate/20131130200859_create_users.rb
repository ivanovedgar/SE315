class CreateUsers < ActiveRecord::Migration
  def change
    create_table :users do |t|
      t.string :title
      t.string :name
      t.string :surname
      t.date :DOB
      t.integer :telephoneNumber
      t.string :address
      t.string :currentLicenseType
      t.integer :licensePeriod
      t.string :occupation
      t.string :vehicleRegistration
      t.integer :estimatedAnnualMileage
      t.integer :estimatedVehicleValue
      t.string :typicalParkingLocation
      t.date :policyStartDate
      t.integer :numberOfIncidents
      t.integer :policyExcess
      t.string :breakdownCover

      t.timestamps
    end
  end
end
