cd `dirname $0`

git config core.ignorecase false

gem update --system
gem install bundler
bundle install

npm cache clean
npm install
npm update

bower cache clean
bower install