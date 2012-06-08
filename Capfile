load 'deploy' if respond_to?(:namespace) # cap2 differentiator

Dir['vendor/plugins/*/recipes/*.rb'].each { |plugin| load(plugin) }

load Gem.find_files('symfony2.rb').last.to_s

load 'commons/config/deploy/symfony2multiapps'

load 'commons/config/deploy'

