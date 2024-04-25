require 'sinatra'



# Method to reverse the name
def reverse_name(first_name, last_name)
  "#{last_name} #{first_name}"
end

# Method to calculate the length of first name and last name
def calculate_name_lengths(first_name, last_name)
  first_name_length = first_name.length
  last_name_length = last_name.length
  [first_name_length, last_name_length]
end

# Method to capitalize characters of a string
def capitalize_characters(string)
  string.upcase
end
get '/' do
  erb :index
end

post '/result' do
  first_name = params[:first_name]
  last_name = params[:last_name]
  action = params[:action]

  case action
  when 'reverse'
    @result = reverse_name(first_name, last_name)
    
  when 'length'
    @result = calculate_name_lengths(first_name, last_name)
  when 'capitalize'
    @result = [capitalize_characters(first_name), capitalize_characters(last_name)]
  else
    @result = "Invalid action"
  end

  erb :result
end

