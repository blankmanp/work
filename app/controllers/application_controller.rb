class ApplicationController < ActionController::Base
  # Prevent CSRF attacks by raising an exception.
  # For APIs, you may want to use :null_session instead.
  protect_from_forgery with: :exception

  def login?
    if session[:user_id].nil?
      return false
    end
    return true
  end

  def check_login
    unless login?
      redirect_to '/blankmanp/login'
    end
  end

end
