class RemoveTypeFromBeer < ActiveRecord::Migration
  def change
    remove_column :beers, :type, :string
  end
end
