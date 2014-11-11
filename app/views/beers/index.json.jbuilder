json.array!(@beers) do |beer|
  json.extract! beer, :id, :name, :type, :description
  json.url beer_url(beer, format: :json)
end
