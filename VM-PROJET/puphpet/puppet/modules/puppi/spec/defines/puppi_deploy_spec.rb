require 'spec_helper'

describe 'puppi::deploy' do

  let(:title) { 'puppi::deploy' }
  let(:node) { 'rspec.example42.com' }
  let(:params) {
    { 'enable'   =>  'true',
      'name'     =>  'get',
      'command'  =>  'echo',
      'priority' =>  '50',
      'project'  =>  'myapp',
    }
  }

  describe 'Test puppi deploy step file creation' do
    it 'should create a puppi::deploy step file' do
      should contain_file('/etc/puppi/projects/myapp/deploy/50-get').with_ensure('present')
    end
    it 'should populate correctly the puppi::deploy step file' do
      should contain_file('/etc/puppi/projects/myapp/deploy/50-get').with_content("su - root -c \"export project=myapp && /etc/puppi/scripts/echo \"\n")
    end
  end

end
