load Gem.find_files('symfony2.rb').last.to_s

set :apps, []

namespace :symfony do
  namespace :assets do
    alias_task :install_one, :install

    desc "Install assets for all apps"
    task :install do
      apps.each do | app |
        logger.important "Install assets for #{app}"
        set :symfony_console, app + '/console'
        symfony.assets.install_one
      end
    end
  end

  namespace :cache do
    alias_task :clear_one, :clear

    desc "Clears project cache for all apps."
    task :clear do
      apps.each do | app |
        logger.important "Clear cache for for #{app}"
        set :symfony_console, app + '/console'
        symfony.cache.clear_one
      end
    end

    alias_task :warmup_one, :warmup

    desc "Warms up an empty cache for all apps."
    task :warmup do
      apps.each do | app |
        logger.important "Warmup #{app}"
        set :symfony_console, app + '/console'
        symfony.cache.warmup_one
      end
    end

  end

  namespace :propel do
    namespace :build do
      alias_task :model_one, :model

      desc "Build the Model classes for all apps."
      task :model do
        apps.each do | app |
          logger.important "Build propel model for #{app}"
          set :symfony_console, app + '/console'
          symfony.propel.build.model_one
        end
      end

      alias_task :sql_one, :sql

      desc "Build SQL statements for all apps."
      task :sql do
        apps.each do | app |
          logger.important "Build propel sql for #{app}"
          set :symfony_console, app + '/console'
          symfony.propel.build.sql_one
        end
      end

      alias_task :all_and_load_one, :all_and_load

      desc "Build the Model classes, SQL statements and insert SQL for all apps."
      task :all_and_load do
        apps.each do | app |
          logger.important "Build all and load for #{app}"
          set :symfony_console, app + '/console'
          symfony.propel.build.all_and_load_one
        end
      end

    end
  end
end

