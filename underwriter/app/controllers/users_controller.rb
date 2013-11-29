class UsersController < ApplicationController
	skip_before_action :verify_authenticity_token
	def new
		@user = Users.new
 @user.save
end

def create
    @user = User.new(user_params)

    respond_to do |format|
      if @user.save
        format.html { redirect_to @user, notice: 'User was successfully created.' }
        format.json { render json: @user, status: :created, location: @user }
      else
        format.html { render action: "new" }
        format.json { render json: @user.errors, status: :unprocessable_entity }
      end
    end
  end

def show
	 @user = User.find(params[:id])
	 		respond_to do |format|
		format.html
		format.json { render json: @user }
	end
end

private
 def user_params
   params.require(:user).permit(:name, :surname)
  end

end
