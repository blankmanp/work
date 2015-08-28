Rails.application.routes.draw do
  root :to => 'users#index'

  get '/blog' => 'users#show_blog'
end
