require 'test_helper'

class UsersControllerTest < ActionController::TestCase
  setup do
    @user = users(:one)
  end

  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:users)
  end

  test "should get new" do
    get :new
    assert_response :success
  end

  test "should create user" do
    assert_difference('User.count') do
      post :create, user: { DOB: @user.DOB, address: @user.address, breakdownCover: @user.breakdownCover, currentLicenseType: @user.currentLicenseType, estimatedAnnualMileage: @user.estimatedAnnualMileage, estimatedVehicleValue: @user.estimatedVehicleValue, licensePeriod: @user.licensePeriod, name: @user.name, numberOfIncidents: @user.numberOfIncidents, occupation: @user.occupation, policyExcess: @user.policyExcess, policyStartDate: @user.policyStartDate, quote: @user.quote, surname: @user.surname, telephoneNumber: @user.telephoneNumber, title: @user.title, typicalParkingLocation: @user.typicalParkingLocation, vehicleRegistration: @user.vehicleRegistration }
    end

    assert_redirected_to user_path(assigns(:user))
  end

  test "should show user" do
    get :show, id: @user
    assert_response :success
  end

  test "should get edit" do
    get :edit, id: @user
    assert_response :success
  end

  test "should update user" do
    patch :update, id: @user, user: { DOB: @user.DOB, address: @user.address, breakdownCover: @user.breakdownCover, currentLicenseType: @user.currentLicenseType, estimatedAnnualMileage: @user.estimatedAnnualMileage, estimatedVehicleValue: @user.estimatedVehicleValue, licensePeriod: @user.licensePeriod, name: @user.name, numberOfIncidents: @user.numberOfIncidents, occupation: @user.occupation, policyExcess: @user.policyExcess, policyStartDate: @user.policyStartDate, quote: @user.quote, surname: @user.surname, telephoneNumber: @user.telephoneNumber, title: @user.title, typicalParkingLocation: @user.typicalParkingLocation, vehicleRegistration: @user.vehicleRegistration }
    assert_redirected_to user_path(assigns(:user))
  end

  test "should destroy user" do
    assert_difference('User.count', -1) do
      delete :destroy, id: @user
    end

    assert_redirected_to users_path
  end
end
